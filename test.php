<head>
    <style>
        .test {
            width: 100px;
            height: 100px;
            background: black;
            color: aliceblue;
            transform: translateY(20rem);
            transition: 2s;
        }
    </style>
</head>
<script>
	const active = () => {
		let test = document.getElementById("test");
		console.log(test)
		test.style = `transform: translateY(0rem);`

        setTimeout(() => {
            test.style = `opacity:0;`
        }, 4000);
	}
   </script>

   <body>
<a href="uyelik">aaaa</a>
<input type="submit" onclick="active()">

    <div class="test" id="test">
        <div class="test1">AAAAAAAAA</div>
    </div>
   </body>