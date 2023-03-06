<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple interest</title>
	<link rel="stylesheet" type="text/css" href="../../css/vue.css">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>

<main id="vue-context">
  <h1>{{heading}}</h1>
  
  <form>
    <field>
      <label>Enter the principal:</label>
      <input type="text" v-model="principal">
      <label>Enter the rate of interest:</label>
      <input type="text" v-model="rate">
      <label>Enter the number of years:</label>
      <input type="text" v-model="years">
    </field>
  </form>
  
  <output v-if="principal && rate && years">
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
      heading: "Computing Simple Interest",
      principal: "",
      rate: "",
      years: "",
    }
  },
  
  methods: {
    calculateSimpleInterest() {
      return this.principal * this.rate * this.years;
    }
  },
  
  computed: {
    output() {
      if (this.principal && this.rate && this.years) {
        return `After ${this.years} years at ${this.rate}%, the investment will be worth ${this.calculateSimpleInterest()}`;
      }
    }
  },
})
</script>