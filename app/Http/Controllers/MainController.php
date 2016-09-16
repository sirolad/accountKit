<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

use App\Http\Requests;

class MainController extends Controller
{
    /**
     * $appId
     * @var [int]
     */
    protected $appId;

    /**
     * [$appSecret description]
     * @var [string]
     */
   protected $appSecret;

   /**
    * [$tokenExchangeUrl description]
    * @var [type]
    */
   protected $tokenExchangeUrl;

   /**
    * [$endPointUrl description]
    * @var [type]
    */
   protected $endPointUrl;

   /**
    * [__construct description]
    */
   public function __construct()
   {
      $this->appId            = config('accountkit.app_id');
      $this->appSecret        = config('accountkit.app_secret');
      $this->endPointUrl      = config('accountkit.end_point');
      $this->tokenExchangeUrl = config('accountkit.tokenExchangeUrl');
   }


  /**
   * [login description]
   * @param  Request $request [description]
   * @return [type]           [description]
   */
  public function login(Request $request)
  {
      $client = new GuzzleHttpClient();

      $url = $this->tokenExchangeUrl.'grant_type=authorization_code'.
              '&code='. $request->get('code').
              "&access_token=AA|$this->appId|$this->appSecret";

      $apiRequest = $client->request('GET', $url);

      $body = json_decode($apiRequest->getBody());

      $userId = $body->id;

      $userAccessToken = $body->access_token;

      $refreshInterval = $body->token_refresh_interval_sec;

      $getData = $client->request('GET', $this->endPointUrl.$userAccessToken);

      $data = json_decode($getData->getBody());

      $phone = isset($data->phone) ? $data->phone->number : '';

      $email = isset($data->email) ? $data->email->address : '';

      return view('index', compact('phone', 'email', 'userId', 'userAccessToken', 'refreshInterval'));
  }

  public function logout()
  {
      Auth::logout();

      return view('welcome');
  }

}
