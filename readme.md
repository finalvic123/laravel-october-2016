
# How to create a page

## Route

Set Route - `routes/web.php`

```php
Route::get('about-us','PageController@aboutUs')
```

## Controller

Create a controller - `php artisan make:controller PageController --resource` - and create a method `aboutUs` returning view from `pages.index`.

```php
public function aboutUs()
{
	return view('pages.index');
}
```

## View

Create the view - create new folder in `resources/views/` named `pages`. In `pages`, create `aboutUs.blade.php`. Add the following content:

```html
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<h1>About Us</h1>
    </div>
</div>
@endsection
```

# How to create a list of users using Artisan

Run `php artisan tinker`.

Then run `factory(\App\User::class, 100)->create();`. This will create 100 users.

# How to call PUT and DELETE from Ajax

You need to method spoofing when calling `PUT` and `DELETE` method in Laravel since HTTP call does not capture other that `GET` and `POST`. Following are the sample code when you need to call a `PUT` or `DELETE` URI using Ajax.

```javascript
function confirmDelete(id)
{
	if(confirm('Are you sure'))
	{
		var data = {
			_token : window.Laravel.csrfToken,
			_method : 'delete'
		}
		$.post('/users/' + id, data, function(data, textStatus, xhr) {
			// do something
		});
	}
}
```