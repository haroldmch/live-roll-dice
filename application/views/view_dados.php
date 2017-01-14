<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dados</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta name="theme-color" content="#fff">
        <link href="<?=CSS?>estilo.css" rel="stylesheet" type="text/css">
	</head>
	<body>
        <header>
            <h1>Hola, <?=$nombre?></h1>
        </header>
        <main>
            <section>
                <h2>Dados</h2>
                <div id="dados">
					<div>
						<input type="number" id="mul-d4" min="1" value="1" class="roll">
						<div class="dtal">d4 +</div>
						<input type="number" id="sum-d4" min="1" value="0" class="sum">
						<button id="d4" class="lanzar">Lanzar</button>
					</div>
					<div>
						<input type="number" id="mul-d6" min="1" value="1"  class="roll">
						<div class="dtal">d6 +</div>
						<input type="number" id="sum-d6" min="1" value="0" class="sum">
						<button id="d6" class="lanzar">Lanzar</button>
					</div>
					<div>
						<input type="number" id="mul-d8" min="1" value="1"  class="roll">
						<div class="dtal">d8 +</div>
						<input type="number" id="sum-d8" min="1" value="0" class="sum">
						<button id="d8" class="lanzar">Lanzar</button>
					</div>
					<div>
						<input type="number" id="mul-d10" min="1" value="1"  class="roll">
						<div class="dtal">d10 +</div>
						<input type="number" id="sum-d10" min="1" value="0" class="sum">
						<button id="d10" class="lanzar">Lanzar</button>
					</div>
					<div>
						<input type="number" id="mul-d12" min="1" value="1"  class="roll">
						<div class="dtal">d12 +</div>
						<input type="number" id="sum-d12" min="1" value="0" class="sum">
						<button id="d12" class="lanzar">Lanzar</button>
					</div>
					<div>
						<input type="number" id="mul-d20" min="1" value="1"  class="roll">
						<div class="dtal">d20 +</div>
						<input type="number" id="sum-d20" min="1" value="0" class="sum">
						<button id="d20" class="lanzar">Lanzar</button>
					</div>
					<div>
						<input type="number" id="mul-d100" min="1" value="1"  class="roll">
						<div class="dtal">d100 +</div>
						<input type="number" id="sum-d100" min="1" value="0" class="sum">
						<button id="d100" class="lanzar">Lanzar</button>
					</div>
                </div>
            </section>
            <section>
                <h2>Historial</h2>
                <div id="historial"></div>
            </section>
        </main>
        <footer>
            <input type="hidden" id="name" value=""/>
        </footer>
        <script src="<?=JS?>jquery.js" type="text/javascript"></script>
        <script src="<?=JS?>lanzadas.js" type="text/javascript"></script>
        <script>
            var update = true;
            var base = "<?=BASE?>"; 
            var img = "<?=IMG?>"; 
            var nombre = "<?=$nombre?>";
        </script>
    </body>
</html>