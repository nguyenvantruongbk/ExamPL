<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam_php_lar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/app.css"/>

</head>
<body>
    
    <div class="container mt-5">
    <h2>Add New Product</h2>

    <form action=" " method="post">
       
        <div class="mb-3">
            <label for="ProductType" class="form-label">Product Type</label>
            <input type="text" class="form-control" id="ProductType" name="ProductType" value="{{ }}">
          
          
          
        </div>
        <div class="mb-3">
            <label for="ProductCode" class="form-label">Product Code</label>
            <input type="text" class="form-control " id="ProductCode" name="ProductCode" value="{{  }}">
         
        </div>
        <div class="mb-3">
            <label for="ProductName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="ProductName" name="ProductName" value="{{  }}">
        </div>
        <div class="mb-3">
            <label for="Quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="Quantity" name="Quantity" value="{{  }}">
        </div>
        <div class="mb-3">
            <label for="Note" class="form-label">Note</label>
            <input type="text" class="form-control" id="Note" name="Note" value="{{  }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



</body>
</html>