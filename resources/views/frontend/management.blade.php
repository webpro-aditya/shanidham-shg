@php $classes = 'single-page about-page'; @endphp
@extends('layouts.user_type.guest')

@section('page_title', __('Management'))

@section('content')
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Our Management</h1>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <table class="table table-striped table-bordered table-hover">
    <thead class="table-danger">
      <tr>
        <th>S. No.</th>
        <th>Name &amp; Address</th>
        <th>Post</th>
        <th>Profession</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>1</td>
        <td>Smt Rekha<br>
          W/o Sh. Moolchand Gupta<br>
          B -1st 570, J.J. Colony, Madanpur Khadar <br>
          New Delhi-110044
        </td>
        <td>President</td>
        <td>Social Worker</td>
      </tr>

      <tr>
        <td>2</td>
        <td>Ms. Prem Kumari <br>
          D/o Late Pyare Lal <br>
          38 /1299, DDA Flats, <br>
          Madangir, New Delhi-110062 <br>
          Mobile:9811808311

        </td>
        <td>Secretary</td>
        <td>Professional</td>
      </tr>

      <tr>
        <td>3</td>
        <td>Smt. Suman <br>
          W/o Sh Mamchand<br>
          H.NO.322 Dera Village New Delhi -110074
        </td>
        <td>Treasurer</td>
        <td>House wife</td>
      </tr>

      <tr>
        <td>4</td>
        <td>Smt. Mari Ekka <br>
          W/o Sh. Simon Ekka<br>
          H.No.-D-142, Badarpur, Molar Band<br>
          New Delhi – 110044
        </td>
        <td>Member</td>
        <td>Pvt. Sevice</td>
      </tr>

      <tr>
        <td>5</td>
        <td>Sh. Anjali Sharma <br>
          W/o Sunil Sharma<br>
          H.No – B 1570, sarita Vihar,<br>
          New Delhi - 110076
        </td>
        <td>Member</td>
        <td>House wife</td>
      </tr>

      <tr>
        <td>6</td>
        <td>Smt. Kamlesh<br>
          W/o Sh. Sanjay Sharma<br>
          H.No. 42 Gurjar Mohalla,<br>
          New Delhi -110074
        </td>
        <td>Member</td>
        <td>Pvt. Sevice </td>
      </tr>

      <tr>
        <td>7</td>
        <td>Smt. Sunita<br>
          W/o Sh. Pratap<br>
          H.No. 147 , Drea Village <br>
          New Delhi -110074
        </td>
        <td>Member</td>
        <td>House wife</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection

@section('front-footer')

@endsection