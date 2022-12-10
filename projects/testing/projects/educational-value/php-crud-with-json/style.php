
<style>
	body {
		padding: 20px;
	}
	form {
		display: flex;
		flex-direction: column;
		gap: 20px;
		max-width: 300px;
	}
	field {
		display: flex;
		flex-direction: column;
	}

	.term {
		display: inline-block;
		position: relative;
	}

	.term::before, .term::after {
		position: absolute;
		color: red;
	}

	.term::before {
		content: '“';
		top: 0;
		right: 100%;
	}
	.term::after {
		content: '”';
		top: 0;
		left: 100%;
	}
</style>
