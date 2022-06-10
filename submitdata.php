<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Request-Method, Access-Control-Allow-Origin");

$data = json_decode(file_get_contents("php://input"), true);

 class dynamicform{
    private $formhed;
    private $info;
    public $form = '';
    public $formfinal = '';
    
    public function fieldinfo($info){
        $this->info = $info;
        switch($info['type']){

            case 'checkbox':
                $this->checkboxfield($info);
            break;

            case 'select':
                $this->selectfield($info);
            break;

            case 'radio':
                $this->radiofield($info);
            break;

            default:
                $this->comonfield($info);
        } 

    }

    // for text phone and other 
    private function comonfield($info){

        $type = $info['type'];
        $label = $info['label'];
        $id = $info['id'];
        $class = $info['class'];
        $name = $info['name'];
        $value = $info['value'];
        $placeholder = $info['placeholder'];
        $readonly = $info['readonly'] ? 'readonly' : '';

        $field = <<<field
        <label for="$name">$label</label>
        <input type="$type" id="$id" name="$name" value="$value" class="$class" placeholder="$placeholder" $readonly>

        field;

        if($type == 'button'){
            $field = <<<field
        <input type="$type" id="$id" name="$name" value="$value" class="$class" placeholder="$placeholder" $readonly>

        field;
        }
        $this->finalform($field);
    }

    // for checkbox 
    private function checkboxfield($info){
        
        $type = $info['type'];
        $id = $info['id'];
        $name = $info['name'];
        $options = $info['options'];
        $options = explode(',', $options);

        $field = '';
        $label = $info['label'];

        $pre = "<label for='$name'>$label</label>";
        foreach($options as $option){

            $field .= <<<field
            
            <input type="$type" id="$id" name="$name" value="$option">$option
    
            field;

        }
        $pre .= $field;
        $this->finalform($pre);

    }


    // for radio button 
    private function radiofield($info){

        $type = $info['type'];
        $id = $info['id'];
        $name = $info['name'];
        $options = $info['options'];
        $options = explode(',', $options);
        $label = $info['label'];
        $field = '';
        $pre = "<label for='$name'>$label</label>";
        foreach($options as $option){

            $field .= <<<field
            
            <input type="$type" id="$id" name="$name" value="$option">$option
    
            field;
        }
        $pre .= $field;
        $this->finalform($pre);
    }



    private function selectfield($info){

        $type = $info['type'];
        $id = $info['id'];
        $name = $info['name'];
        $options = $info['options'];
        $options = explode(',', $options);
        $feildinner = "<select name=$name id=$id><option value=''>--Select--</option>";
        
        foreach($options as $option){

            $feildinner .= <<<field
            
                <option value="$option">$option</option>
    
            field;
        }
        
        $field = $feildinner.'</select>';
            $this->finalform($field);
    }

    private function finalform($field){
        if($this->info['required']){
            $label = $this->info['label'];
            $regex = "/$label/i";
            $field = preg_replace($regex, $label."*", $field);
            $field = substr($field ,0,-3);
            $field .= 'required>';
        }

            $class = $this->info['wrapper_class'];
            $this->form = "<div class='$class'>".$field.'</div>'; 
    }
 }


 $contact = new dynamicform;




 $contact->fieldinfo($data);

$string = <<<demo
 <h1>ankit</h1>
demo;
// print_r($data);
$parsh = ['data' =>  $contact->form];


echo json_encode($parsh);


?>