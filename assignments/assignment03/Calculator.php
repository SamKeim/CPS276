<?
    class Calculator{
        public function calc($operator, $operandA = null, $operandB = null){
            if(!$this->validate($operator, $operandA, $operandB)){
                return "<font color=\"red\">You must enter a string and two numbers. Entry : " . $operator . " " . $operandA . " " . $operandB . "</font>";
            }
            switch($operator){
                case "/":
                    return $this->division($operandA, $operandB);
                case "*":
                    return $this->multiplication($operandA, $operandB);
                case "-":
                    return $this->subtraction($operandA, $operandB);
                case "+":
                    return $this->addition($operandA, $operandB);
                default:
                    return "<font color=\"red\">Operand not found. Entry : " . $operator . " " . $operandA . " " . $operandB . "</font>";
            }
        }
        private function validate($operator, $operandA, $operandB){
            return (is_string($operator) && (is_int($operandA) || is_float($operandA)) && (is_int($operandB) || is_float($operandB)));
        }
        private function division($operandA, $operandB){
            if($operandB == 0){
                return "<font color=\"red\">Cannot divide by zero. Entry : " . $operandA . " / " . $operandB . "</font>";
            } else {
                return "The division of the numbers " . $operandA . " and " . $operandB . " is " . ($operandA / $operandB);
            }
        }
        private function multiplication($operandA, $operandB){
            return "The product of the numbers " . $operandA . " and " . $operandB . " is " . ($operandA * $operandB);
        }
        private function subtraction($operandA, $operandB){
            return "The difference of the numbers " . $operandA . " and " . $operandB . " is " . ($operandA - $operandB);
        }
        private function addition($operandA, $operandB){
            return "The sum of the numbers " . $operandA . " and " . $operandB . " is " . ($operandA + $operandB);
        }
    }
?>