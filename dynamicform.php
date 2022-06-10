<?php

 class dynamicform{
    private $formhed;
    private $info;

    public function __construct($method, $action){

       $this->formhed = "<form action='$action' method='$method' autocomplete='off'>";
       echo $this->formhed;

    }
    
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
        $feildinner = '<select name="color" id="color"><option value="">--- Choose a color ---</option>';
        
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
        if ($this->info['wrapper']){
            $class = $this->info['wrapper_class'];
            echo "<div class='$class'>";
            echo $field;
            echo '</div>';
        }else{
            echo $field;
        }
        
    }

    public function formfooter(){
        echo '</form>';
    }
 }

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
        'option' => ['oh','no', 'no'],
        'checked' => false,
        'readonly' => false,
        'description' => false,
    ]
    );
?>


