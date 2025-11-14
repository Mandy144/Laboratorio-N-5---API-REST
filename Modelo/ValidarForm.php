<?PHP
//https://mailtrap.io/blog/php-form-validation/#How-to-validate-a-form-in-PHP-using-script
class FormValidator {
    private $data;
    private $requiredFields = [];
    private $arrayErrores = [];

    private $banderaError = false;


    public function enviarDatos($postData) {
        $this->data = $postData;
       // print_r($this->data);
    }
    public function setRequiredFields(array $fields) {
    $this->requiredFields = $fields;
    }
    public function validate() {
        // Common validation rules
        $this->validateRequiredFields();
        $this->validateNumerics(['precio', 'cantidad']); // 👈 Nuevo método
        //$this->validateEmailFormat();
        // Add more validation methods as needed
    }

    private function validateRequiredFields(){
        // Check if required fields are present
        foreach ($this->requiredFields as $field) {
            
            if (!isset($this->data[$field]) || is_null($this->data[$field]) || $this->data[$field] === "" || $this->data[$field]=== 0) {
                //throw new Exception("{$field} is required.");
                $this->arrayErrores[$field] = "{$field} is required.";
                $this->banderaError = true;
            }
        }
    }

    private function validateNumerics(array $fields){
    foreach ($fields as $field) {
        // Verifica si el campo existe y NO es numérico O es negativo
        if (isset($this->data[$field]) && (!is_numeric($this->data[$field]) || $this->data[$field] < 0)) {
            $this->arrayErrores[$field] = "{$field} debe ser un valor numérico positivo.";
            $this->banderaError = true;
        }
    }
}

    public function getError():bool {

        return $this->banderaError;
    }

    public function getErrorArray(): array {
    return $this->arrayErrores;
    }



    // Define other validation methods...
}


?>