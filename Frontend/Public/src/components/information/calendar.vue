<template>
    <v-app>
        <VueCal
             :disable-views="['years', 'year']"
             default-view="month"
              events-on-month-view="short"
              :events="events"
             :time="false"
             :on-event-click="onEventClick"
        >
        </VueCal>

        <v-dialog min-width="350" max-width="400" v-model="showDialog">
          <v-card>
            <v-card-title class="text-white dialog-head mb-3">
              <span>{{ selectedEvent.title }}</span>
              <v-spacer/>
              <strong>{{ (selectedEvent.start || '').substr(0, 10) }}</strong>
            </v-card-title>
            <v-card-text>
              <strong>La description:</strong>
              <p v-html="selectedEvent.content"/>
              <strong>Détails de l'activité:</strong>
              <ul>
                <!-- You can also manipulate the Date objects `startDate` & `endDate`. -->
                <li>L'activité commence à: {{ (selectedEvent.start || '').substr(11) }}</li>
                <li>L'activité se termine à: {{ (selectedEvent.end || '').substr(11) }}</li>
              </ul>
            </v-card-text>
          </v-card>
        </v-dialog>
    </v-app>
</template>

<style>
    .vuecal__menu, .vuecal__cell-events-count {
        background-color: #ECA000;
        color: #fff;
    }
    .vuecal__cell.today, .vuecal__cell.current {
        background-color: rgba(240,220,230, 0.4);
    }
    .vuecal:not(.vuecal--day-view) .vuecal__cell.selected {
        background-color: rgba(240,220,230, 0.4);
    }
    .vuecal__cell.selected:before {
        border-color: rgba(66, 185, 131, 0.5);
    }

    .dialog-head {
        background-color: #ECA000;
    }
    .vuecal__event {
        cursor: pointer;
        background-color: #ECA000;
        border: 1px solid #ECA000;
        color: #fff;
    }

    .vuecal__event-title {
      font-size: 1.2em;
      font-weight: bold;
      margin: 4px 0 8px;
    }


    .vuecal__event-time {
      display: inline-block;
      margin-bottom: 12px;
      padding-bottom: 12px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    }

    .vuecal--month-view .vuecal__cell-content {
      justify-content: flex-start;
      height: 100%;
      align-items: flex-end;
    }

    .vuecal--month-view .vuecal__cell-date {padding: 4px;}
    .vuecal--month-view .vuecal__no-event {display: none;}

</style>
<script>
import VueCal from 'vue-cal';
import 'vue-cal/dist/vuecal.css';
import axios from 'axios';

export default {
    components: { VueCal },
    data: () => ({
      selectedEvent: {},
      showDialog: false,
      mainLoad: true,
      events: [],
    }),
    mounted(){
        axios.get('http://164.132.99.169:8000/community/information/calendar').then((res)=>{
            this.events = res.data;
            this.mainLoad = false;

        })
    },
    methods: {
      onEventClick (event, e) {
        this.selectedEvent = event
        this.showDialog = true

        // Prevent navigating to narrower view (default vue-cal behavior).
        e.stopPropagation()
      }
    }
};
</script>
