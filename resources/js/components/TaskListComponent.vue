<template>
  <div class="container">
    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">Person In Charge</th>
          <th scope="col">Show</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="task in tasks" :key="task">
          <th scope="row">{{ task.id }}</th>
          <td>{{ task.title }}</td>
          <td>{{ task.content }}</td>
          <td>{{ task.person_in_charge }}</td>
          <td>
            <Router-link
              :to="{ name: 'task.show', params: { taskId: task.id } }"
            >
              <button class="btn btn-primary">Show</button>
            </Router-link>
          </td>
          <td>
            <Router-link
              :to="{ name: 'task.edit', params: { taskId: task.id } }"
            >
              <button class="btn btn-success">Edit</button>
            </Router-link>
          </td>
          <td>
            <button class="btn btn-danger" @click="deleteTask(task.id)">
              Delete
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
  export default {
    data: function () {
      return {
        tasks: [],
      }
    },
    methods: {
      getTasks() {
        axios.get('/api/tasks').then((res) => {
          this.tasks = res.data
        })
      },
      deleteTask(id) {
        axios.delete('/api/tasks/' + id).then((res) => {
          // 再読み込みさせるため
          this.getTasks()
        })
      },
    },
    mounted() {
      this.getTasks()
    },
  }
</script>
