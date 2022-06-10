<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>

</style>

<body>

    <div class="buttons">

        <button type="button" id="addText" class="btn btn-primary addne" >Text</button>
        <button type="button" id="addEmail" class="btn btn-primary addne" >Email</button>
        <button type="button" id="addNumber" class="btn btn-primary addne" >Number</button>
        <button type="button" id="addPhone" class="btn btn-primary addne" >Phone</button>
        <button type="button" id="addSelection" class="btn btn-primary addne" >select</button>
        <button type="button" id="addRadio" class="btn btn-primary addne" >radio</button>
        <button type="button" id="addCheckbox" class="btn btn-primary addne" >checkbox</button>
        <button type="button" id="addbutton" class="btn btn-primary addne" >button</button>

    </div>

    <div class="secondc container" id="display">

    </div>

    <div class="outerpopup" style="display: none;">

        <span id='closepopup'>x</span>
        <div class="container">
            
            <form id='form'>
                <h3>Add <span id="titleform"></span> field </h3>
                <div class="mb-3" id="text">
                    <div class="warpper checkbox">
                        field type(required): <input type="checkbox" name="required" id="required"><br>
                        read only: <input type="checkbox" name="readonly" id="readonly"><br>
                    </div>

                    <div class="warpper">
                    Lable:<input type="text" name="label" id="label">
                    </div>

                    <div class="warpper">
                    Name:<input type="Name" name="Name" id="Name">
                    </div>

                    <div class="warpper">
                    Default value:<input type="text" name="value" id="value">
                    </div>

                    <div class="warpper">
                    Id attribute:<input type="text" name="id" id="id">
                    </div>

                    <div class="warpper">
                    Class attribute:<input type="Class" name="Class" id="Class">
                    </div>

                    <div class="warpper">
                    placeholder:<input type="text" name="placeholder" id="placeholder">
                    </div>

                    <div class="warpper lastoption">
                    <label for="textarea" id="leboption">Options:</label>
                    <textarea name="options" id="options" class="options" cols="30" rows="5"></textarea>
                    <span class="options">saperate options by (,)</span>
                    </div>

                </div>
                <input type="button" value="Add" onclick="senddata()">
            </form>
        </div>
    </div>

<input type="button" value="HTML" id="htmlcode">

<div class="htmlform" style="display:none">

    <textarea name="htmlform" id="htmlform" class="container" cols="30" rows="10"></textarea>
    <input type="button" value="update" id="update">
    <span id='closepopuphtml' >x</span>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="script.js"></script>

</body>

</html>