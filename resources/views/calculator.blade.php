<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculez vos operations ici</h1>
    <div class="calculator-container">
<div class="calculator-card">


<form action="{{route('calculate')}}" method="post">

@csrf

<input type="text" name="num1" placeholder="Entrer un nombre" required value="{{isset($num1)?$num1: ' '}}">
<div id="selected-operator">{{isset($operator)? ' '.$operator: ' '}}
<input type="text" name="num2" placeholder="Entrer le second nombre" required value="{{isset($num2)?$num2: ' '}}">
</div>
<DIV> 
    <BUTTon type="BUTTON" onclick="setOperator('+')"> + </BUTTon>
    <BUTTon type="BUTTON" onclick="setOperator('-')"> - </BUTTon>
    <BUTTon type="BUTTON" onclick="setOperator('*')"> * </BUTTon>
    <BUTTon type="BUTTON" onclick="setOperator('/')"> / </BUTTon>
</DIV>
<input type="hidden" name="operator" id="operator" value="">
<button type="button" class="button" onclick="submitForm()">Calculer</button>
</form>
</div>
</div>
@if (isset($result))
    <div class="result-cart">
        <p>Resultat: {{$result}}</p>
    </div>
@endif
<script>
    function setOperator(operator){
        document.getElementById('selected-operator').innerText = operator;
        document.getElementById('operator').value = operator;
    }
    function submitForm(){
        document.querySelector('form').submit();
    }
</script>
</body>
</html>