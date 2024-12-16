<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h1> create product</h1>
    <form method="post" action="{{route('store')}}">
        @csrf
        @method('post')
        <div>
            <label for="name"> name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label> quantity</label>
            <input type="text" name="qty" placeholder="quntity">
        </div>
        <div>
            <label for="price"> Price</label>
            <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <label for="decription"> decription</label>
            <input type="text" name="decription" placeholder="decription">
        </div>
        <div>
            <input type="submit" value="save new flight">
        </div>
    </form>

</body>

</html>