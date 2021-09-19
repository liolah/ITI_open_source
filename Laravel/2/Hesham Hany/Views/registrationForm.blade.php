@extends('homePage')
    
@section('title','Registration')

@section('content')
  <div style="margin: -150px auto">
    <form method="POST" >
    <table>
      <tr><p style="color: grey; font-size: 18px;">Ceate new account:</p></tr>
      <tr>
        <td><label for="un">User Name:</label></td>
        <td><input type="text" id="un"></td>
      </tr>
      <tr>
        <td><label for="em">Email:</label></td>
        <td><input type="email" id="em"></td>
      </tr>
      <tr>
        <td><label for="pass">Password:</label></td>
        <td><input type="password" id="pass"></td>
      </tr>
      <tr>
        <td><label for="pass2">Confirm Password:</label></td>
        <td><input type="password" id="pass2"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Sign Up" style="background-color: grey; color:white; border-color: grey;"></td>
      </tr>
    </table>
  </div>
@endsection