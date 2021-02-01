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
```
use Steadfastcollective\LaravelDailyco\DailyFacade;

$rooms = DailyFacade::rooms();
```

**Create room**
```
use Steadfastcollective\LaravelDailyco\DailyFacade;

$rooms = DailyFacade::createRoom([...]);
```

**Get room**
```
use Steadfastcollective\LaravelDailyco\DailyFacade;

$rooms = DailyFacade::room('roomId', [...]);
```

**Update room**
```
use Steadfastcollective\LaravelDailyco\DailyFacade;

$rooms = DailyFacade::updateRoom('roomId', [...]);
```

**Delete room room**
```
use Steadfastcollective\LaravelDailyco\DailyFacade;

$rooms = DailyFacade::deleteRoom('roomId', [...]);
```

### Meeting tokens

**Create meeting token**
```
use Steadfastcollective\LaravelDailyco\DailyFacade;

$rooms = DailyFacade::createMeetingToken([...]);
```

**Get meeting token**
```
use Steadfastcollective\LaravelDailyco\DailyFacade;

$rooms = DailyFacade::meetingToken('meetingToken', [...]);
```

### Recordings

TODO
