<template>
  <div class="container">
    <table border="1">
      <tr v-for="(todo, index) in todos" :key=index>
        <td>{{ todo.title }}</td>
        <td>{{ todo.content }}</td>
        <td><a :href="'/edit-todo/' + todo.id ">編集</a></td>
        <td><a :href="'/delete-todo/' + todo.id ">削除</a></td>
        <!-- <a :href="post.fields.url">{{post.fields.url}}</a> -->
      </tr>
    </table>
  </div>
</template>

<script>
export default {
  data() { //データの初期値を設定
    return {
      todos: [],
    };
  },
  methods: {
    getTodos() {
      const data = {}
      var self = this;
      axios.get('/api/todo', data)
        .then(res =>  {
          this.todos = res.data
        })
        .catch( error => { console.log(error); });
    }
  },
  created() { //APIアクセスでgetTodos()を呼び出す
    this.getTodos()
  }
}
</script>
