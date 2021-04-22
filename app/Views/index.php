<!DOCTYPE html>
<html>
<head>
  <title>Calculator Cloning of OOP</title>
  <style>
    body{
      background: linear-gradient(to right, navy, red);
      text-align: center;
    }
  </style>
</head>
<body>
  <form action="calculator" method="POST">
    <input type="text" name="num1">
    <select name="calc">
      <option value="add">Add</option>
      <option value="sub">Sub</option>
      <option value="mul">Mul</option>
      <option value="div">Divide</option>
    </select>
    <input type="text" name="num2">
    <button type="submit">Calculate</button>
  </form>

</body>
</html>