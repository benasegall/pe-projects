<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Area of a rectangle</title>
	<link rel="stylesheet" type="text/css" href="../../css/vue.css">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>

<main id="vue-context">
  <h1>{{heading}}</h1>
  
  <form>
    <field>
      <label>What is the length of the room in feet?</label>
      <input type="text" v-model="length">
      <label>What is the width of the room in feet?</label>
      <input type="text" v-model="width">
    </field>
  </form>
  
  <output v-if="length && width">
    {{output}}
  </output>

  <div class="links">
    <a href="../../../../?page=projects">Return to Projects</a>
    <a href="../../../../?page=exercises">Return to Exercises</a>
  </div>
</main>
</body>
</html>

<script>
new Vue({
  el: "main",
  
  data() {
    return {
      heading: "Area of a Rectangle",
      length: "",
      width: "",
    }
  },
  
  computed: {
    output() {
      let feet = this.length * this.width;
      let meters = feet * 0.09290304;
      if (this.length && this.width) {
        return `The area is ${feet} square feet and ${meters} square meters.`
      }
    }
  },
})
</script>