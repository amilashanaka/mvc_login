<?php 

namespace app\core\form;

use app\core\Model;

abstract class BaseField 
{
    public Model $model;

    public string $attribute;


    public function __construct(Model $model, $attribute)
    {


        $this->model = $model;
        $this->attribute = $attribute;
    
    }


    abstract public function renderInput():string;

    public function __toString()
    {

        return sprintf('
        
        <div class="form-group">
        <label class="form-label"> %s</label>
        %s

        <div class="invalid-feedback">%s</div>

        </div>
     
      
      
         ', 
        //  $this->model->getLable($this->attribute), $this->type,$this->attribute, $this->model->{$this->attribute}, $this->model->hasError($this->attribute) ? ' is-invalid' : '', $this->model->getFirstError($this->attribute));

        $this->model->getLable($this->attribute), 
        $this->renderInput(),
        $this->model->getFirstError($this->attribute)
    );
    }


}