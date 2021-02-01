# Laravel Daily.co SDK

**Still in development**

This package is an unofficial SDK for [Daily.co](https://daily.co)'s REST API.

## Installation

1. Install with Composer `composer require steadfastcollective/laravel-dailyco`
2. Publish configuration file with `php artisan vendor:publish`
3. Add your Daily API key to your `.env`

```
DAILY_API_KEY=
```
4. You should now be able to perform API requests using the SDK! Follow the [usage guide](#usage).

## Usage

To make API requests with this package, you can either use the Facade, which we would recommend, or you could just manually new up the `Steadfastcollective\LaravelDailyco\Daily` class and call the methods from there.

All of our below examples use the Facade.

### Rooms

**Get rooms**
```php
use Steadfastcollective\LaravelDailyco\DailyFacade;

$rooms = DailyFacade::rooms();
```

**Create room**
```php
use Steadfastcollective\LaravelDailyco\DailyFacade;

$room = DailyFacade::createRoom([...]);
```

**Get room**
```php
use Steadfastcollective\LaravelDailyco\DailyFacade;

$room = DailyFacade::room('roomId', [...]);
```

**Update room**
```php
use Steadfastcollective\LaravelDailyco\DailyFacade;

$room = DailyFacade::updateRoom('roomId', [...]);
```

**Delete room room**
```php
use Steadfastcollective\LaravelDailyco\DailyFacade;

DailyFacade::deleteRoom('roomId', [...]);
```

### Meeting tokens

**Create meeting token**
```php
use Steadfastcollective\LaravelDailyco\DailyFacade;

$token = DailyFacade::createMeetingToken([...]);
```

**Get meeting token**
```php
use Steadfastcollective\LaravelDailyco\DailyFacade;

$token = DailyFacade::meetingToken('meetingToken', [...]);
```

### Recordings

TODO

### Logs

**Get logs**
```php
use Steadfastcollective\LaravelDailyco\DailyFacade;

$logs = DailyFacade::logs();
```

### Meeting Analytics

**Retrieve meeting analytics**
```php
use Steadfastcollective\LaravelDailyco\DailyFacade;

$analytics = DailyFacade::meetingAnalytics();
```

### Presence

**Active participants**
```php
use Steadfastcollective\LaravelDailyco\DailyFacade;

$participants = DailyFacade::presence();
```

### Handling errors

This package will throw an exception whenever a response comes back from Daily.co as a non-200 status code.

The exception message will contain the endpoint that was attempted to be reached and the status code that actually came back.

## Security

If you find any security vulnerabilities in this package, instead of using the issue tracker, please directly email [dev@steadfastcollective.com](mailto:dev@steadfastcollective.com).
