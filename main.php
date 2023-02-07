<?php ?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      .calculator {
        width: 400px;
        height: 500px;
        margin: 50px auto;
        padding: 20px;
        background-color: #eee;
        text-align: center;
      }
      input[type="text"] {
        width: 100%;
        height: 50px;
        font-size: 20px;
        margin-bottom: 20px;
      }
      button {
        width: 20%;
        height: 50px;
        font-size: 20px;
        margin-bottom: 20px;
        background-color: #333;
        color: #fff;
        border: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="calculator">
      <h1>Simple Calculator</h1>
      <input type="text" id="result" disabled />
      <br />
      <button id="clear">C</button>
	  <button id="backspace">DEL</button>
	  <button id="divide">/</button>
	  <button id="multiply">*</button>
      <br />
      <button id="seven">7</button>
      <button id="eight">8</button>
      <button id="nine">9</button>
      <button id="subtract">-</button>
      <br />
      <button id="four">4</button>
      <button id="five">5</button>
      <button id="six">6</button>
      <button id="add">+</button>
      <br />
      <button id="one">1</button>
      <button id="two">2</button>
      <button id="three">3</button>
      <button id="equals">=</button>
      <br />
      <button id="zero">0</button>
      <button id="decimal">.</button>
    </div>

    <script>
      const buttons = document.querySelectorAll("button");
      const result = document.querySelector("#result");

      buttons.forEach(button => {
        button.addEventListener("click", e => {
          if (button.id === "clear") {
            result.value = "";
          } else if (button.id === "backspace") {
            result.value = result.value.slice(0, -1);
          } else if (button.id === "equals") {
            result.value = evaluateExpression(result.value);
          } else {
            result.value += button.innerHTML;
          }
        });
      });

      function evaluateExpression(expression) {
        let expressionArray = expression.split(" ");

        for (let i = 0; i < expressionArray.length; i++) {
          if (expressionArray[i] === "x") {
            expressionArray[i] = "*";
          }
        }

        return eval(expressionArray.join(" "));
      }

    </script>
  </body>
</html>
