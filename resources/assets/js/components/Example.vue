<template>
   <div>
       <h2 class="zan-doc-demo-block__subtitle">请输入参赛队名</h2>
       <van-cell-group>
           <van-field v-model="name" placeholder="请输入参赛队名"></van-field>
       </van-cell-group>
       <h2 class="zan-doc-demo-block__subtitle">请输入负责人信息</h2>
       <van-cell-group>
           <van-field v-model="Main.name" placeholder="请输入姓名"></van-field>
           <van-field v-model="Main.class" placeholder="请输入班级"></van-field>
           <van-field v-model="Main.code" placeholder="请输入学号"></van-field>
           <van-field v-model="Main.phone" placeholder="请输入手机号"></van-field>
           <van-field v-model="Main.qq" placeholder="请输入QQ号"></van-field>
       </van-cell-group>
       <h2 class="zan-doc-demo-block__subtitle">请补充其他成员信息</h2>
       <van-cell-group>
           <van-field v-model="user1.name" placeholder="请输入姓名"></van-field>
           <van-field v-model="user1.class" placeholder="请输入班级"></van-field>
           <van-field v-model="user1.code" placeholder="请输入学号"></van-field>
           <van-field v-model="user1.phone" placeholder="请输入手机号"></van-field>
           <van-field v-model="user1.qq" placeholder="请输入QQ号"></van-field>
       </van-cell-group>
       <h2 class="zan-doc-demo-block__subtitle">请补充其他成员信息</h2>
       <van-cell-group>
           <van-field v-model="user2.name" placeholder="请输入姓名"></van-field>
           <van-field v-model="user2.class" placeholder="请输入班级"></van-field>
           <van-field v-model="user2.code" placeholder="请输入学号"></van-field>
           <van-field v-model="user2.phone" placeholder="请输入手机号"></van-field>
           <van-field v-model="user2.qq" placeholder="请输入QQ号"></van-field>
       </van-cell-group>
       <h2 class="zan-doc-demo-block__subtitle">请补充其他成员信息(16-17级)</h2>
       <van-cell-group>
           <van-field v-model="user3.name" placeholder="请输入姓名"></van-field>
           <van-field v-model="user3.class" placeholder="请输入班级"></van-field>
           <van-field v-model="user3.code" placeholder="请输入学号"></van-field>
           <van-field v-model="user3.phone" placeholder="请输入手机号"></van-field>
           <van-field v-model="user3.qq" placeholder="请输入QQ号"></van-field>
       </van-cell-group>
       <van-button type="primary" bottom-action v-on:click="submit">提交</van-button>
   </div>
</template>

<script>

    export default {
        data() {
          return {
              name: '',
              Main: {
                  name: '',
                  class: '',
                  code: '',
                  phone: '',
                  qq: ''
              },
              user1: {
                  name: '',
                  class: '',
                  code: '',
                  phone: '',
                  qq: ''
              },
              user2: {
                  name: '',
                  class: '',
                  code: '',
                  phone: '',
                  qq: ''
              },
              user3: {
                  name: '',
                  class: '',
                  code: '',
                  phone: '',
                  qq: ''
              }
          }
        },
        methods: {
            submit: function () {
                var self = this;
                axios({
                    method: 'post',
                    url: '/enrol',
                    data: {
                        name: this.name,
                        main: this.Main,
                        user1: this.user1,
                        user2: this.user2,
                        user3: this.user3
                    }
                }).then(function (response) {
                    if (response.data.code == 200) {
                        alert(response.data.msg);
                        window.location.href='/';
                    } else {
                        alert('出问题了= =');
                        window.location.href='/';
                    }

                    })
                    .catch(function (error) {
                        console.log(error)
                    });
            },
        },
        mounted() {
            console.log(window.schema)
        }
    }
</script>

<style>
    .van-popup--right {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #f8f8f8;
    }

    .zan-doc-demo-block__subtitle1 {
        font-size: 20px;
        color: rgba(69,90,100,.6);
        padding: 12px 15px 10px;
    }

</style>