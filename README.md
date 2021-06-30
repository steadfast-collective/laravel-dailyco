# Laravel Daily.co SDK

<p align="center">
    <a href="https://packagist.org/packages/steadfastcollective/laravel-dailyco">
        <img src="https://img.shields.io/packagist/dt/steadfastcollective/laravel-dailyco" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/steadfastcollective/laravel-dailyco">
        <img src="https://img.shields.io/packagist/v/steadfastcollective/laravel-dailyco" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/steadfastcollective/laravel-dailyco">
        <img src="https://img.shields.io/packagist/l/steadfastcollective/laravel-dailyco" alt="License">
    </a>
</p>

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

To make API requests with this package, you can either use the Facade, which we would recommend, or you could just manually new up the `SteadfastCollective\LaravelDailyco\Daily` class and call the methods from there.

All of our below examples use the Facade.

### Rooms

**Get rooms**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$rooms = DailyFacade::rooms();
```

**Create room**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$room = DailyFacade::createRoom([...]);
```

**Get room**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$room = DailyFacade::room('roomId', [...]);
```

**Update room**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$room = DailyFacade::updateRoom('roomId', [...]);
```

**Delete room room**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

DailyFacade::deleteRoom('roomId', [...]);
```

### Meeting tokens

**Create meeting token**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$token = DailyFacade::createMeetingToken([...]);
```

**Get meeting token**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$token = DailyFacade::meetingToken('meetingToken', [...]);
```

### Recordings

**Get recordings**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$recordings = DailyFacade::recordings([...]);
```

**Get a recording**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$recording = DailyFacade::recording('recordingId', [...]);
```

**Delete a recording**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$recording = DailyFacade::deleteRecording('recordingId', [...]);
```

**Get recording access link**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$accessLink = DailyFacade::recordingAccessLink('recordingId', [...]);
```

**Get recording download link**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$downloadLink = DailyFacade::recordingDownload('recordingId', [...]);
```

**Create recording composite recipe**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$recipe = DailyFacade::createRecordingCompositesReceipe('recordingId', [...]);
```

**Get recording composites**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$composites = DailyFacade::recordingComposites('recordingId', [...]);
```

### Logs

**Get logs**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$logs = DailyFacade::logs();
```

### Meeting Analytics

**Retrieve meeting analytics**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$analytics = DailyFacade::meetingAnalytics();
```

### Presence

**Active participants**
```php
use SteadfastCollective\LaravelDailyco\DailyFacade;

$participants = DailyFacade::presence();
```

### Handling errors

This package will throw an exception whenever a non 200 response is returned from Daily's API. The full list of exceptions is provided below.

| **Status Code**         | **Exception**                                                            |
|-------------------------|--------------------------------------------------------------------------|
| 400 (Bad Request)       | `SteadfastCollective\LaravelDailyco\Exceptions\BadRequestException`      |
| 401 (Unauthorized)      | `SteadfastCollective\LaravelDailyco\Exceptions\UnauthorizedException`    |
| 404 (Not Found)         | `SteadfastCollective\LaravelDailyco\Exceptions\NotFoundException`        |
| 429 (Too Many Requests) | `SteadfastCollective\LaravelDailyco\Exceptions\TooManyRequestsException` |
| 5xx (Server Errors)     | `SteadfastCollective\LaravelDailyco\Exceptions\ServerErrorException`     |

## Security

If you find any security vulnerabilities in this package, please directly email [dev@steadfastcollective.com](mailto:dev@steadfastcollective.com), rather than using the issue tracker.
