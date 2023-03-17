<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="../../css/vue.css">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>

<main id='vue-context'>
  <h1>
    {{heading}}
  </h1>
  <form>
    <field>
      <label>Enter a noun</label>
      <input type="text" v-model="noun">
      <label>Enter a verb</label>
      <input type="text" v-model="verb">
      <label>Enter an adjective</label>
      <input type="text" v-model="adjective">
      <label>Enter an adverb</label>
      <input type="text" v-model="adverb">
    </field>
  </form>
  
  <output v-if="noun && verb && adjective && adverb">
    {{mad}}
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
      heading: "Mad Lib",
      noun: "",
      verb: "",
      adjective: "",
      adverb: "",
    }
  },
  
  computed: {
    mad() {
      if (this.noun && this.verb && this.adjective && this.adverb) {
        return `This ${this.noun} is such a ${this.verb}, that I am about to ${this.adjective}! Yeah, and they were like, it's a total ${this.adverb}.`
      }
    }
  },
})
</script>