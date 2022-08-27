![GitHub](https://img.shields.io/github/license/jeffrey-kroonen/bol-retailer-api-php?style=for-the-badge)

<h3 align="center">
    Bol.com Retailer API PHP
</h3>

<p align="center">
    An PHP Client to interact with the Bol.com Retailer API
</p>

## About the project

The project is built with php v8.1.4 and will is not complete. Only the endpoints I needed for my project are included in this project. Their will be no future releases coming from my side, besides when the Bol.com Retailer API releases a new version. Or if I have to make use of more endpoints.

Feel free to fork this project and [contribute](#Contributing) your work to improve the project.

## Getting Started

### Installation

The project can be easily be installed through Composer

``` bash
composer require jeffrey-kroonen/bol-retailer-api-php
```

## Usage

Create a new instance of the `Client`

```php
$client = new Client(
    bolClientId: '<client-id',
    bolClientSecret: '<client-secret>'
);
```

Next you can call the [endpoint](https://api.bol.com/retailer/public/redoc/v7/retailer.html) which you will want to make use of

```php
$ordersEndpoint = $client->orders();
```

Then you can call the methods available for that endpoint
```php
$ordersEndpoint->orders(); // Retrieve a Paginate class instance containing orders
$ordersEndpoint->orderById(id: '<order-id>'); // Retrieve an order by id
```

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement". Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (git checkout -b feature/AmazingFeature)
3. Commit your Changes (git commit -m 'Add some AmazingFeature')
4. Push to the Branch (git push origin feature/AmazingFeature)
5. Open a Pull Request
