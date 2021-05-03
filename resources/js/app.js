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

}
