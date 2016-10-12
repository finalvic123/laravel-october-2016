
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

# How to create a validator

Create custom request by running `php artisan make:request UserRequest`.

Open `UserRequest.php` located at `app/Http/Requests`.

Add validation rules for your form at `rules()` method:

```php
return [
    'name' => 'required|min:6|max:255',
    'email' => 'required|email|max:255|unique:users',
    'password' => 'required|min:6|confirmed',
];
```

Next, include `UserRequest` namespace in `UserController` - `use App\Http\Requests\UserRequest;`. 

Now in `UserController`'s `store(Request $request)` method, replace `store(Request $request)` with `store(UserRequest $request)`.

## To display error message

Following are the sample to display an error message

```html
@if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
```