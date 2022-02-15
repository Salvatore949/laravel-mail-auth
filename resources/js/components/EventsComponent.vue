<template>
    <div id="videogames">
        <h2>Videogames</h2>
        <table border="2">
            <tr>
                <th>TITOLO</th>
                <th>SOTTOTITOLO</th>
                <th>RATING</th>
            </tr>
            <tr v-for="videogame in videogames" :key="videogame.id">
                <td>{{videogame.titolo}}</td>
                <td>{{videogame.sottotitolo}}</td>
                <td>{{videogame.rating}}</td>
            </tr>
        </table>
    </div>
</template>
<script>

export default{
    data : function(){
      return{
          videogames : []
    };
},

   mounted(){
       axios.get('/api/videogames/list')
             .then( r => this.videogames = r.data)
             .catch(e => console.log(e));
   }
}
</script>