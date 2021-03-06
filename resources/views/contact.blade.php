@extends('master')

@section('headTitle', 'Contact')
@section('pageTitle', 'Contact.')
@section('description')
If for any reason you would like to contact me
<br>
I guess here is the best place to do so
@endsection

@section('content')

<br>

<div class="employmentStatus">
    <strong>Employment Status: </strong> Happily employed @ Wilxite Ltd
</div>

<div class="containerSplit thirdContainer reverseContainer noOutsideMargin">

    <div class="container">

        <a><i class="fas fa-envelope"></i> contact@michaeldodd.co.uk</a><br>
        <a><i class="fab fa-twitter-square"></i> @mdoddzz</a><br>
        <a><i class="fab fa-linkedin"></i> linkedin.com/afdsfsd</a><br>
        <a><i class="fab fa-github"></i> github.com/wilxiteMike</a>

    </div>

    <div class="container twoThirds">

        <form class="formContainer" id="contactForm" method="POST">

            <div class="animatedInput">
                <input type="text" name="contactName" />
                <label>Name</label>
                <span class="focus-border"></span>
            </div>

            <div class="animatedInput">
                <input type="text" name="contactEmail" />
                <label>Email</label>
                <span class="focus-border"></span>
            </div>

            <div class="animatedInput">
                <textarea name="contactMessage"></textarea>
                <label>Message</label>
                <span class="focus-border"></span>
            </div>

            <input type="hidden" name="sbmt" value="1" /> 
            {{ csrf_field() }}

            <input type="submit" class="button right medium positive submitContact" value="Send" />

        </form>

    </div>

</div>

@endsection