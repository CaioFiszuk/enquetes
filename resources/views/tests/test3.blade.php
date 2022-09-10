@extends('layouts.app')

@section('content')

<h2 class="text-center">Test 3</h2>
<hr>

<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4 mt-4">
      <form action="{{route('result.3')}}" method="post">
        @csrf

        <label class="p-2">1. Lorem ipsum sit amet?</label>
        Yes <input type="radio" name="opt1" value="yes">
        No <input type="radio" name="opt1" value="no">
         <br>
        <label class="p-2">2. Lorem ipsum sit amet?</label>
        Yes <input type="radio" name="opt2" value="yes">
        No <input type="radio" name="opt2" value="no">
         <br>
        <label class="p-2">3. Lorem ipsum sit amet?</label>
        Yes <input type="radio" name="opt3" value="yes">
        No <input type="radio" name="opt3" value="no">
         <br>
        <label class="p-2">4. Lorem ipsum sit amet?</label>
        Yes <input type="radio" name="opt4" value="yes">
        No <input type="radio" name="opt4" value="no">
         <br>
        <label class="p-2">5. Lorem ipsum sit amet?</label>
        Yes <input type="radio" name="opt5" value="yes">
        No <input type="radio" name="opt5" value="no">
         <br>
        <label class="p-2">6. Lorem ipsum sit amet?</label>
        Yes <input type="radio" name="opt6" value="yes">
        No <input type="radio" name="opt6" value="no">
         <br>
        <label class="p-2">7. Lorem ipsum sit amet?</label>
        Yes <input type="radio" name="opt7" value="yes">
        No <input type="radio" name="opt7" value="no">
          <br>
        <label class="p-2">8. Lorem ipsum sit amet?</label>
        Yes <input type="radio" name="opt8" value="yes">
        No <input type="radio" name="opt8" value="no">
          <br>
        <label class="p-2">9. Lorem ipsum sit amet?</label>
        Yes <input type="radio" name="opt9" value="yes">
        No <input type="radio" name="opt9" value="no">
         <br>
        <label class="p-2">10. Lorem ipsum sit amet?</label>
        Yes <input type="radio" name="opt10" value="yes">
        No <input type="radio" name="opt10" value="no">
         <br>

        <input type="submit" value="Go" class="btn btn-secondary mt-2">
    </form>
    </div>
  </div>
</div>

@endsection