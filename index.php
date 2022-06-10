<?php
require_once 'dynamicform.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>dynamic form</title>
</head>
<style>
    form {
    width: 50%;
    margin: auto;
    border: 1px solid #d5d5d5;
    padding: 20px;
}.warpper_class {
    width: 100%;
    display: flex;
    align-items: center;
    margin: 20px 0;
}div#accordionExample {
    width: 90%;
    margin: 50px auto;
    box-shadow: -1px 0px 20px 11px #006aff1c;
}
</style>
<body>
    Fill The form

    <?php
    $contact = new dynamicform('submit.php', 'post');


    $contact->fieldinfo(
        [
            'type' => 'text',
            'label' => 'Name',
            'id' => 'id',
            'name' => 'name',
            'default' => '',
            'value' => '',
            'placeholder' => 'Enter Name',
            'class' => 'class',
            'wrapper' => true,
            'wrapper_class' => 'warpper_class',
            'required' => true,
            'disabled' => false,
            'checked' => false,
            'readonly' => false,
            'description' => false,
        ]
        );
    $contact->fieldinfo(
        [
            'type' => 'email',
            'label' => 'Email',
            'id' => 'id',
            'name' => 'email',
            'default' => '',
            'value' => '',
            'placeholder' => 'Enter Email',
            'class' => 'email',
            'wrapper' => true,
            'wrapper_class' => 'warpper_class',
            'required' => true,
            'disabled' => false,
            'checked' => false,
            'readonly' => false,
            'description' => false,
        ]
        );
    $contact->fieldinfo(
        [
            'type' => 'text',
            'label' => 'Adress',
            'id' => 'adress',
            'name' => 'adress',
            'default' => '',
            'value' => 'Admedabad',
            'placeholder' => '',
            'class' => 'class',
            'wrapper' => true,
            'wrapper_class' => 'warpper_class',
            'required' => false,
            'disabled' => false,
            'checked' => false,
            'readonly' => true,
            'description' => false,
        ]
        );
    
    $contact->fieldinfo(
        [
            'type' => 'checkbox',
            'label' => 'select color',
            'id' => 'id',
            'name' => 'name',
            'default' => '',
            'value' => 'ankit',
            'placeholder' => '',
            'class' => 'class',
            'wrapper' => true,
            'wrapper_class' => 'warpper_class',
            'required' => false,
            'disabled' => false,
            'checked' => false,
            'readonly' => false,
            'description' => false,
            'attributes' => array(),
            'options' => array('red', 'yellow', 'blue', 'pink'),
            'multiple' => false
        ]
        );
        
    $contact->fieldinfo(
    [
        'type' => 'radio',
        'label' => 'select color',
        'id' => 'id',
        'name' => 'name',
        'default' => '',
        'value' => 'ankit',
        'placeholder' => '',
        'class' => 'class',
        'wrapper' => true,
        'wrapper_class' => 'warpper_class',
        'required' => false,
        'disabled' => false,
        'checked' => false,
        'readonly' => false,
        'description' => false,
        'attributes' => array(),
        'options' => array('red', 'yellow', 'blue', 'pink'),
        'multiple' => false
        ]
    );
    $contact->fieldinfo(
        [
            'type' => 'select',
            'label' => 'Select color',
            'id' => 'id',
            'name' => 'name',
            'default' => '',
            'value' => 'ankit',
            'placeholder' => '',
            'class' => 'class',
            'wrapper' => true,
            'wrapper_class' => 'warpper_class',
            'required' => false,
            'disabled' => false,
            'checked' => false,
            'readonly' => false,
            'description' => false,
            'attributes' => array(),
            'options' => array('red', 'yellow', 'blue', 'pink'),
            'multiple' => false
        ]
        );
    


    $contact->fieldinfo(
        [
            'type' => 'button',
            'label' => '',
            'id' => 'id',
            'name' => 'name',
            'default' => '',
            'value' => 'submit',
            'placeholder' => '',
            'class' => 'class',
            'wrapper' => false,
            'wrapper_class' => 'warpper_class',
            'required' => false,
            'disabled' => false,
            'checked' => false,
            'readonly' => false,
            'description' => false,
            'attributes' => array(),
            'options' => array(),
            'multiple' => false
        ]
        );


    
    $contact->formfooter();
    ?>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        This is dynamic form
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        This form created by oops.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        how to use this form
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body"> 
            Ceat new object: $contact = new dynamicform('submit.php', 'post');
        <br>And pass this array by calling methoid
<pre>
$contact->fieldinfo(
    [
        'type' => 'text',
        'label' => 'Name',
        'id' => 'id',
        'name' => 'name',
        'default' => '',
        'value' => '',
        'placeholder' => 'Enter Name',
        'class' => 'class',
        'wrapper' => true,
        'wrapper_class' => 'warpper_class',
        'required' => true,
        'disabled' => false,
        'checked' => false,
        'readonly' => false,
        'description' => false,
    ]
    );
</pre>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        how you can improve styling of form
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       just style your classes and ids you have passed in array
      </div>
    </div>
  </div>
</div>
</body>
</html>