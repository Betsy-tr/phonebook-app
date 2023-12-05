<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
 
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <h1 class="text-4xl mt-4 text-center font-serif font-extrabold">Pratique sur Alpine js</h1>

    <h2 class="ml-4 text-2xl mt-4 font-serif font-semibold text-underline">Exemples pour débutant : </h2>

    <div class="flex row">
        

        <div class=" ml-4 mt-2 border border-black h-35 w-25 justify-center">
            <p class=" ml-4">Affichage du message ci-dessous à l'aide de <strong>"x-data"</strong>et <strong>"x-text"</strong> </p>
            <h1 class=" ml-4" x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
        </div>

        <div class=" ml-4 mt-2 border border-black">
            <p class=" ml-4">Création de 2 buttons à l'aide <strong>"x-data"</strong>, <strong>x-on:click</strong> et <strong>"x-text"</strong> </p>
            <div class="mt-3" x-data="{ count: 0 }">
		        <button class="ml-4 rounded-sm bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20" x-on:click="count++">Increment</button>
	            <span x-text="count"></span>
	        </div>
	
	        <div class="mt-3 pb-4" x-data="{count : 0}">
	        	<button class="ml-4 rounded-sm bg-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20" x-on:click="count--">Decrement</button>
	        	<span x-text="count"></span>
	        </div>
        </div>

        <div class=" ml-4 mt-2 border border-black">
            <p class=" ml-4">Création d'une liste déroulante à l'aide <strong>"x-data"</strong>, <strong>"@click"</strong> , <strong>"x-show"</strong> et <strong>"@click.outside"</strong> </p>
            <div x-data="{ open: false }">
            <button class="ml-4 bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20" @click="open = ! open">Toggle</button>
    
                <div class="ml-4" x-show="open" x-transition.duration.500ms  @click.outside="open = false">
                    <ul>
                        <li>Accueil</li>
                        <li>Service</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=" ml-4 mt-2 border border-black">
            <p class=" ml-4">Création d'une entrée de recherche à l'aide <strong>"x-data"</strong>, <strong>"x-model"</strong> , <strong>"x-for"</strong> et <strong>"x-text"</strong> </p>
            <div x-data="{

                search: '',
                
                items: ['foo', 'bar', 'baz'],
                
                get filteredItems() {
                    return this.items.filter(
                            i => i.startsWith(this.search)
                        )
                    }
                }"
            >
                <input class="ml-4 mt-2 border border-green-500  bg-transparent" x-model="search" placeholder="Search...">
    
                <ul class="ml-4">
                    <template x-for="item in filteredItems" :key="item">
                        <li x-text="item"></li>
                    </template>
                </ul>
            </div>
        </div>

        <div class=" ml-4 mt-2 border border-black">
            <p class=" ml-4">Créer un champs qui permet de saisir une date, à l'aide de <strong>"x-mask"</strong></p>
            <input class="ml-4 mt-2 border border-orange-500  bg-transparent" x-mask="99/99/9999" placeholder="MM/DD/YYYY">
            
        </div>
    </div>

    
</body>
</html>