<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
<div class="container">
    
    <div class="row">
        <div class="col-lg">
            <h1>Contact us (Package)</h1>
            <br>
        </div>
    </div>

    <form action="/submit" method="post">
        {{-- @csrf --}}
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="name">
          </div>
        </div>

        <div class="row mb-3">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" name="email" class="form-control" id="email">
          </div>
        </div>

        <div class="row mb-3">
          <label for="Address" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-10">
            <input type="text" name="address" class="form-control" id="Address">
          </div>
        </div>

        <div class="row mb-3">
            <label for="Message" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
              <textarea name="message" id="" cols="30" class="form-control" rows="10"></textarea>
            </div>
          </div>

        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>