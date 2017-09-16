@component('mail::message')
    ![alt text]({{URL::to('/images/Logo1.png')}} "Logo Title Text 1")
    # Hello {{$user->first_name}}

You have been profiled on Règlement Facile, but your account is yet to be activated. Click on the below link to activate your profile.
Remember, this link expires in 24 hours

@component('mail::button', ['url' => config('app.url').'/activate/'.$user->email.'/'.$code])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
