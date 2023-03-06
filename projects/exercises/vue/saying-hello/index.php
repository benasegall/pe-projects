<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Saying Hello</title>
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
	      <label for="userName">Enter your name here.</label>
	      <input type="text" v-model="username">
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
	      heading: "Saying Hello",
	      username: "",
	    }
	  },
	  
	  computed: {
	    message() {
	      if (!this.username) {
	        return "Hello there mystery user!"
	      } else {
	        return "Hello there " + this.username;
	      }
	    }
	  },
	})
</script>