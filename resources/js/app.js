const { initial } = require("lodash");
import { $ } from './utils/dom';

window.initIrancloud = () =>{
    const questionItems = $('.questions__item');
    const activeItemClass = 'questions__item--active';

    questionItems.forEach(questionItem => {
        questionItem.addEventListener('click', () => {
            let action = 'open';
            if(questionItem.classList.contains(activeItemClass)){
                action = 'close';
            };
            questionItems.forEach(questionItemRemover => {
                questionItemRemover.classList.remove(activeItemClass);
            });
            if(action == 'close'){
                questionItem.classList.remove(activeItemClass);
            }else{
                questionItem.classList.add(activeItemClass);
            }
        });
    });

    const irancloudTabItems = $('.whatis__tab-list');
    const irancloudTabItemActiveClass = "whatis__tab-list--active";

    const irancloudTabBodys = $('.whatis__tab-body');
    const tabBodyActiveClass = "whatis__tab-body--active";

    irancloudTabItems.forEach(irancloudTabItem => {
        irancloudTabItem.addEventListener('click', (event) => {
            irancloudTabItems.forEach(irancloudTabItemRemover => {
                if(irancloudTabItemRemover.classList.contains(irancloudTabItemActiveClass)){
                    irancloudTabItemRemover.classList.remove(irancloudTabItemActiveClass);
                }
            });

            irancloudTabBodys.forEach(irancloudTabBodysRemover => {
                if(irancloudTabBodysRemover.classList.contains(tabBodyActiveClass)){
                    irancloudTabBodysRemover.classList.remove(tabBodyActiveClass);
                }
            });

            let targetBodyId = event.target.getAttribute('data-bodyid');
            $('#'+targetBodyId).classList.add(tabBodyActiveClass);
            irancloudTabItem.classList.add(irancloudTabItemActiveClass);
        });
    });

    const irancloudDatacenter = [
        ['اسیاتک', 'تهران', 'میلاد', '۴۰۸'],
        ['پارس‌آنلاین', 'تهران', 'پردیس', '۳۰۰'],
        ['افرانت', 'تهران', '-', '۲۵۰'],
        ['تبیان', 'تهران', '-', '۷۲'],
        ['ایرانسل', 'تهران', 'مرکز داده غرب', '۴۰۷'],
        ['همراه‌اول', 'تهران', 'مرکز کاظمیان', '۵۴'],
        ['همراه‌اول', 'تبریز', '-', '۲۵۰'],
        
    ];

    irancloudDatacenter.forEach(items => {
        let irancloudItems = document.createElement('div');
        irancloudItems.classList.add('whatis__tab-project-tech-table-body-items');

        items.forEach(item => {
            let irancloudItem = document.createElement('div');
            irancloudItem.classList.add('whatis__tab-project-tech-table-body-item');
            irancloudItem.innerHTML = item;
            irancloudItems.append(irancloudItem);
        });

        $('.whatis__tab-project-tech-table-body').append(irancloudItems);
    });

    const irancloudProjecttechCapacity =  $('#irancloud-project-tech-capacity');
    const irancloudProjecttechCapacityStatus = 'whatis__tab-project-tech-capacity-items--open';

    irancloudProjecttechCapacity.addEventListener('click', (event) => {
        const irancloudRackData = {
            asiatech: { name:'آسیاتک', city:'تهران', datacenter:'میلاد', rack:'۴۰۸' },
            parsonline: { name:'پارس‌آنلاین', city:'تهران', datacenter:'پردیس', rack:'۳۰۰' },
            afranet: { name:'افرانت', city:'تهران', datacenter:'-', rack:'۲۵۰' },
            tebian: { name:'تبیان', city:'تهران', datacenter:'-', rack:'۷۲' },
            irancell: { name:'ایرانسل', city:'تهران', datacenter:'مرکز داده غرب', rack:'۴۰۷' },
            hamrahaval1: { name:'همراه‌اول', city:'تهران', datacenter:'مرکز کاظمیان', rack:'۵۴' },
            hamrahaval2: { name:'همراه‌اول', city:'تبریز', datacenter:'-', rack:'۲۵۰' }
        };
        if(event.target.id){
            let targetId = event.target.id.split("-capacity")[0];
            $('#irancloud-project-tech-capacity-name').innerHTML = irancloudRackData[targetId].name;
            $('#irancloud-project-tech-capacity-datacenter').innerHTML = irancloudRackData[targetId].datacenter;
            $('#irancloud-project-tech-capacity-rack').innerHTML = irancloudRackData[targetId].rack;
        }
        if(irancloudProjecttechCapacity.classList.contains(irancloudProjecttechCapacityStatus)){
            irancloudProjecttechCapacity.classList.remove(irancloudProjecttechCapacityStatus);
        }else{
            irancloudProjecttechCapacity.classList.add(irancloudProjecttechCapacityStatus);
        }
    });

    const irancloudProjecttechLatency = $('#irancloud-project-tech-latency');
    const irancloudProjecttechLatencyStatus = 'whatis__tab-project-tech-latency-items--open';

    irancloudProjecttechLatency.addEventListener('click', (event) => {
        const irancloudLatencyData = {
            tabriz:{ rack:'۴۰', latency:'۸.۹' },
            shiraz:{ rack:'۱۶', latency:'۱۴.۶' },
            isfahan:{ rack:'۱۶', latency:'۶.۵' },
            karaj:{ rack:'۱۶', latency:'۱.۸' },
            ahvaz:{ rack:'۱۶', latency:'۱۸.۳' },
        };
        if(event.target.id){
            let targetId = event.target.id.split("-latency")[0];
            $('#irancloud-project-tech-latency-latency').innerHTML = irancloudLatencyData[targetId].latency;
            $('#irancloud-project-tech-latency-rack').innerHTML = irancloudLatencyData[targetId].rack;
        }
        if(irancloudProjecttechLatency.classList.contains(irancloudProjecttechLatencyStatus)){
            irancloudProjecttechLatency.classList.remove(irancloudProjecttechLatencyStatus);
        }else{
            irancloudProjecttechLatency.classList.add(irancloudProjecttechLatencyStatus);
        }
    });


    $('.irancloud-map-point').forEach( element => {
        element.addEventListener('mouseover', (event) => {
            $('#'+event.target.id+'-marker').style.display = 'block'
        });
    });

    $('.irancloud-map-point').forEach( element => {
        element.addEventListener('mouseout', (event) => {
            $('#'+event.target.id+'-marker').style.display = 'none'
        });
    });


}
