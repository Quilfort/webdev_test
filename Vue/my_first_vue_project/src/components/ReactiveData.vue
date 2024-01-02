<script>
import { ref } from 'vue'
import SearchResults from './SearchResults.vue'

export default {
    components: {
        SearchResults,
    },
    
    setup() {
        const query = ref('')

        const reset = (evt) => {
            query.value = '' 
        }

    return {
        reset,
        query,
    }
    },
}
</script>

<template>
     <div class="center-container">
        <h2 class="green">Game and Voetbal Articles</h2>
        <input type="text" placeholder="Filter Search" v-model="query" />
        <br>
        <button @click="reset">Reset</button>
        <search-results v-if="query.trim() !== ''" :query="query" />
    </div>
</template>


<style scoped>
.center-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}


h2 {
  font-weight: 500;
  font-size: 2.6rem;
  position: relative;
  top: -10px;
}

input[type='text'] {
    margin-bottom: 20px;
    padding: 10px;
}

button {
  --b: 3px;   /* border thickness */
  --s: .45em; /* size of the corner */
  --color: #373B44;
  
  padding: calc(.5em + var(--s)) calc(.9em + var(--s));
  color: var(--color);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .6em;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

button:hover,
button:focus-visible{
  --_p: 0px;
  outline-color: var(--color);
  outline-offset: .05em;
}

button:active {
  background: var(--color);
  color: #fff;
}
</style>