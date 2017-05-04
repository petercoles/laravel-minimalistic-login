# Minimalistic Login for Laravel

This package offers a minimalistc login form and associated support for those times when your application doesn't need a full registration and authentication system such as that provided out-of-the-box by Laravel.

## Dependancies

It is intended as an alternative to Laravel's authentication. So don't try to use both! However, it sits on top of the default authentication infrastructure and makes selective use of it, so that's a dependancy, but one that comes already built-in to your Laravel project, so nothing for you to do.

Very little styling is provided as Bootstrap is assumed. The package comes with a single, full-formed and self-contained view that pulls in Bootstrap from a CDN, so again, there's nothing you need to do to satisfy this dependancy, and your own loading of Bootstrap (or not, if that's how you roll) won't be interferred with by this package, as it extends a dedicated layout view to satisfy this dependancy.

The package assumes the presence of a User model and associated table (so that it's got something to authenticate against). However, they're exactly the same requirements as you would have nornally for Laravel, and if you want to use an alternative model then, just as you would for Laravel, you can set the alternative details in the auth config file's 'providers.users.model' setting.

## Installation

Installation is straightfoward and follows the normal Laravel approach. Specifically ...

Add the package to your project

```
composer require petercoles/laravel-minimalistic-login
```

Add the service provider to the providers list in your config/app.php file

```
'providers' => [
    // ...
    PeterColes\LaravelMinimalisticLogin\MinimalisticLoginServiceProvider::class,
    // ...
],
```

## Usage

The package comes with routes that are automatically loaded and match (except for registration routes, which are absent) those that Laravel would have provided. So ```yourapp.comm/login``` will just work straight out-of-the-box. As will the normal forgotten password journey.

If you want to display a logo above your authentication forms, or change the page to which a user is redirected after login, then publish and edit the config file.
```
php artisan vendor:publish --provider="PeterColes\LaravelMinimalisticLogin\MinimalisticLoginServiceProvider"
```
The resulting config file, ```login.php```, has clearly documented options for you to set to achieve these aims.

The email sent to users when resetting passwords is the default Laravel notification, so if you wish to amend that, use the approach explained in the [relevant Laravel documentation](https://laravel.com/docs/master/passwords#password-customization).

Assuming that you've run your migrations and have a users table, you won't have any users or a registration process with this package. So to create users you have two options. You can either add user names and email addresses to your users table and then use the forgotten password link on the login page to set passwords. Or more straighforwardly, the package provides an artisan command
```
php artisan login:user {name} {email} {password}
```
to put new users straight into your database together with encypted passwords.

To avoid csrf issues, I recommend using logging out using a form rather than a simple link. To make this super easy to do, the package offers a view that you can drop into your application's navigation just by adding ```@include('minimalistic-login::logout')```. This will display a link to your navigation with the class ```logout-link``` that you can style as you wish. Behind the scenes the required protection is provided by catching click events on the link and instead triggering a form submission with the csrf token.

## Tests

Unusually for my packages, there are no tests for this one. As it's so closely integrated with Laravel, unit tests would be pretty pointless. Feature tests that can be run from a host Laravel installation may be added later.

## Issues

This package was developed to meet a specific need and then generalised for wider use. If you have a use case not currently met, or see something that appears to not be working correctly, please raise an issue at the [github repo](https://github/petercoles/laravel-minimalistic-login).

## Security Vulnerabilities

If you discover a security vulnerability within this package, please send an e-mail to me at peterdcoles&#64;gmail&#46;com. I take security very seriously and any security vulnerabilities will be addressed promptly.

## License

This package is licensed under the [MIT license](http://opensource.org/licenses/MIT).
