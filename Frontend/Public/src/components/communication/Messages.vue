<template>
  <div class="container">
        <h3 class=" text-center">SERVICE DE MESSAGERIE DU CCM</h3>
        <!-- <h2 class="text-center">liste de contacts</h2> -->
        <div class="row mt-5">
            <div class="col-md-12" :class="{'d-none': isActive2}">
                <div class="inbox_people">
                  <div class="headind_srch">
                    <div class="recent_heading">
                      <h4>Recent</h4>
                    </div>
                    <div class="srch_bar">
                      <div class="stylish-input-group">
                        <input type="text" class="search-bar"  placeholder="Search" >
                        <span class="input-group-addon">
                        <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                        </span> </div>
                    </div>
                  </div>
                  <div class="inbox_chat">
                    <!-- add class active chat to chat_list on active chat -->
                    <div v-for="user in users">
                        <div class="chat_list" :id="user.id">
                            <div class="chat_people" @click="FetchMessage" :id="user.id">
                                <div class="chat_img" :id="user.id"> <img :id="user.id" src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="chat_ib" :id="user.id">
                                  <h5 :id="user.id">{{ user.full_name }} <span :id="user.id" class="chat_date">Dec 25</span></h5>
                                  <p :id="user.id">Test, which is a new approach to have all solutions 
                                    astrology under one roof.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" :class="{'d-none': isActive}">
              <div class="mesgs">
                <div class="msg_history" v-chat-scroll="{always: false, smooth: true, scrollonremoved:true, smoothonremoved: false}">
                  <button class="btn btn-danger btn-lg sticky-top" @click=contacts><span class="fa fa-users"></span> Contacts</button>
                  <div v-if="messages.length">
                    <div class="incoming_msg" v-for="message in messages">
                      <div class="" v-if="message.sender_id == val.receiver_id && message.receiver_id == 1">
                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="received_msg" >
                          <div class="received_withd_msg">
                            <p>{{ message.content }}</p>
                            <span class="time_date"> {{ message.created_at }}    |    June 9</span>
                          </div>
                        </div>
                      </div>
                      <div class="" v-if="message.sender_id == 1 && message.receiver_id == val.receiver_id">
                        <div class="outgoing_msg">
                          <div class="sent_msg">
                            <p>{{ message.content }}</p>
                            <span class="time_date"> {{moment( message.created_at ).format("dddd, MMM Do YYYY, H:mm")}}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div v-else>
                      <p class="p-5">
                        <strong>H-Message</strong> n'a pas besoin de connexion internet pour envoyez des méssages.<br><br>
                        Afin de pouvoir commencer à utiliser ce Service, veuilllez suivre les étapes suivantes : <br><br>
                         rassurez-vous que vous êtes connecter au réseau du Télécentre.<br><br>
                         Ensuite, choisir un contact sur la liste a vôtre gauche, et c'est parti
                      </p>
                  </div>
                </div>
                <div class="type_msg mb-1">
                  <div class="input_msg_write">
                    <input type="text" name="content" @keyup.enter="Send" v-model="val.content" placeholder="Saisir le message" class="write_msg" />
                    <button class="msg_send_btn text-white" @click="Send" type="button">
                      <v-icon class="text-white">fas fa-paper-plane</v-icon>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>

</template>

<script>
import axios from 'axios';
var moment = require('moment');
  export default {
    props: {
      source: String
  },

    data (){
        return{
          moment:moment,
          users:[],
          error:[],
          messages:[],
          val:{
            content: "",
            receiver_id: "",
            sender_id: 1
          },
          isActive: true,
          isActive2: false,
        }
    },
      mounted(){
        axios.get('http://164.132.99.169:3000/community/chat/index').then((response) => {
          this.users = response.data;

        })
      },
      methods:{
        FetchMessage:function(e){
          this.isActive = false;
          this.isActive2 = true;
          axios.get('http://164.132.99.169:3000/community/chat/message/' + e.target.id).then(response => {
            this.messages = response.data;
            this.val.receiver_id = e.target.id
          }, response => {
            this.error = response.data;
          });
        },
        Send:function(){
          if(this.val.content != ""){
            axios.post('http://164.132.99.169:3000/community/chat/message/', this.$data.val).then(response =>{
              this.val.content = "";

              axios.get('http://164.132.99.169:3000/community/chat/message/' + this.val.receiver_id).then(response => {
                this.messages = response.data;

              })
            })
          }
        },
        contacts(){
            this.isActive = true;
            this.isActive2 = false;
        },
      },
      ready: function () {
          this.FetchMessage();

          setInterval(function () {
            this.FetchMessage();
          }.bind(this), 5000); 
        }
  };
</script>
<style>
#app{
  background-color: #366796;
}

@media only screen and (max-width: 600px) {
  .container{
    width:1000px; 
  }
}
img{ max-width:100%;}
.inbox_people {
background: #f8f8f8 none repeat scroll 0 0;
overflow: hidden;
width: 50%; border-right:1px solid #c4c4c4;
margin: auto;
}
.inbox_msg {
border: 1px solid #c4c4c4;
overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
display: inline-block;
text-align: right;
width: 60%;
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
color: #05728f;
font-size: 21px;
margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
border: medium none;
padding: 0;
color: #707070;
font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
float: left;
width: 11%;
}
.chat_ib {
float: left;
padding: 0 0 0 15px;
width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
border-bottom: 1px solid #c4c4c4;
margin: 0;
padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
display: inline-block;
width: 6%;
}
.received_msg {
display: inline-block;
padding: 0 0 0 10px;
vertical-align: top;
width: 92%;
}
.received_withd_msg p {
background: #ebebeb none repeat scroll 0 0;
border-radius: 3px;
color: #646464;
font-size: 14px;
margin: 0;
padding: 5px 10px 5px 12px;
width: 100%;
}
.time_date {
color: #747474;
display: block;
font-size: 12px;
margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  background-color: #fff;
  margin: auto;
  padding: 30px 15px 0 25px;
  width: 70%;
  border: 1px solid #c4c4c4;
}

.sent_msg p {
background: #05728f none repeat scroll 0 0;
border-radius: 3px;
font-size: 14px;
margin: 0; color:#fff;
padding: 5px 10px 5px 12px;
width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
float: right;
width: 46%;
}
.input_msg_write input {
background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
border: medium none;
color: #4c4c4c;
font-size: 15px;
min-height: 48px;
width: 100%;
}

.type_msg {
  border-top: 1px solid #c4c4c4;
  position: relative;
}
.msg_send_btn {
background: #05728f none repeat scroll 0 0;
border: medium none;
border-radius: 50%;
color: #fff;
cursor: pointer;
font-size: 17px;
height: 33px;
position: absolute;
right: 0;
top: 11px;
width: 33px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
height: 516px;
overflow-y: auto;
}
</style>
