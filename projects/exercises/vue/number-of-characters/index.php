<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Number of characters</title>
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
      <label for="userName">Enter your input here.</label>
      <input type="text" v-model="characters">
    </field>
  </form>
  
  <output>
    {{message}}
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
      heading: "Number of Characters",
      characters: "",
    }
  },
  
  computed: {
    message() {
      if (!this.characters) {
        return "Character growth in real time."
      } else {
        return "There are " + this.characters.length + " characters.";
      }
    }
  },
})
</script>