# Account kit on Laravel

Implementation of Facebook's Account Kit on Laravel. It is live [Here](https://lagosworkshop.herokuapp.com)

## Usage

To download and use this project you need to have the following installed on your machine

- Composer
  Visit the [official website](https://getcomposer.org/doc/00-intro.md) for installation instructions.
- Laravel homestead
  Visit [Laravel website](http://laravel.com/docs/5.1/homestead) for installation and setup instructions.

When you have completed the above processes, run:

```bash
$ git clone https://github.com/andela-sakande/accountKit
`````
to clone the repository to your working directory. This step presumes that you have git set up and running.

Run

```bash
$ composer install
```
to pull in the project dependencies.



After that, you need to update your app key in your laravel app by typing this in the terminal , make sure you are in the directory of your laravel app project folder:

$ php artisan key:generate

Further, you need to navigate to https://developers.facebook.com/ to create a new app.

Once your your app has been created, you then create an account kit, 

navigate to +add product , look for account kit and click get started then set it up .

##important

* set the Server URLs to the url of your landing page of your project eg accountkit.dev, localhost/accountkit etc 


* Enable Client Access Token Flow by clicking yes

* Under the Require App Secret field , set it to NO




By now you will have your appid and account kit app secret

To locate account kit app secret, on your developers page on facebook  navigate to  >>Account kit >> and look for Account Kit App Secret

click on show to reaveal

This should be edited on 

1.   .env file   //located in your project folder
2.    ack.js       //located at public/js/

If all goes well then you should by me a beer.





## Credits

AccountKit is maintained by `Surajudeen AKANDE`.

## Contacts

You can reach the developer on `surajudeen.akande@andela.com`

## License

AccountKit is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
