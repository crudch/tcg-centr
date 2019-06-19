<?php
/**
 * @var \Crudch\View\View $this
 */
?>

<?php $this->extend('layouts/app'); ?>

<?php $this->start('title'); ?>ТСЖ «Центральное» Услуги<?php $this->stop(); ?>
<?php $this->start('description'); ?>Услуги ТСЖ «Центральное»<?php $this->stop(); ?>

<?php $this->start('content'); ?>
<section id="services" class="services">
    <div class="services__block">
        <h1>Услуги</h1>
        <p>Перечень обязательных работ и услуг по содержанию и текущему ремонту общего имущества многоквартирного жилого дома по адресу: г. Екатеринбург, ул. 8 Марта, д.7.</p>
        <div class="service__table-container">
            <table class="services__table">
                <thead>
                <tr class="services__table-headers">
                    <th class="services__table-item">№ п/п</th>
                    <th class="services__table-item">Наименование работ и услуг</th>
                    <th class="services__table-item">Периодичность</th>
                </tr>
                </thead>
                <tbody>
                <tr class="services__table-rows">
                    <td class="services__table-item">1.</td>
                    <td class="services__table-item">Мытье полов лестничных клеток, влажная уборка подоконников и перил</td>
                    <td class="services__table-item">1 раз в месяц</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">2.</td>
                    <td class="services__table-item">Мытье окон лестничных клеток, влажная уборка стен (генеральная уборка)</td>
                    <td class="services__table-item">2 раза в год</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">3.</td>
                    <td class="services__table-item">Уборка земельного участка в летний период (подметание)</td>
                    <td class="services__table-item">6 раз в неделю</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">4.</td>
                    <td class="services__table-item">Уборка мусора на контейнерных площадках</td>
                    <td class="services__table-item">7 раз в неделю</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">5.</td>
                    <td class="services__table-item">Сдвижка и подметание снега при отсутствии снегопадов</td>
                    <td class="services__table-item">5 раз в неделю</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">6.</td>
                    <td class="services__table-item">Сдвижка и подметание снега при снегопаде</td>
                    <td class="services__table-item">По мере необходимости</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">7.</td>
                    <td class="services__table-item">Вывоз твердых бытовых отходов</td>
                    <td class="services__table-item">7 раз в неделю</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">8.</td>
                    <td class="services__table-item">Уборка мусора с газонов, очистка урн</td>
                    <td class="services__table-item">6 раз в неделю</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">9.</td>
                    <td class="services__table-item">Укрепление водосточных труб колен и воронок</td>
                    <td class="services__table-item">2 раза в год</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">10.</td>
                    <td class="services__table-item">Консервация системы центрального отопления, ремонт</td>
                    <td class="services__table-item">2 раза в год</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">11.</td>
                    <td class="services__table-item">Замена разбитых стекол окон общего помещения</td>
                    <td class="services__table-item">По мере необходитмости</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">12.</td>
                    <td class="services__table-item">Ремонт, регулировка, промывка, испытание, расконсервирование систем центрального отопления, прочистка дымовентиляционных каналов, проверка и ремонт продухов в цоколях здания, утепление чердачных перекрытий, трубопроводов в чердачных и подвальных помещениях, осмотр кровли</td>
                    <td class="services__table-item">1 раз в год</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">13.</td>
                    <td class="services__table-item">Проведение технических осмотров и устранение незначительных неисправностей в системах вентиляции, дымоудаления, электротехнических устройств</td>
                    <td class="services__table-item">Проверка исправности канализационных вытяжек 1 раз в год. Проверка наличия тяги в дымовентиляционных каналах 1 раз в год. Проверка заземления оболочки электрокабеля. Замеры сопротивления изоляции проводов 1 раз в год</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">14.</td>
                    <td class="services__table-item">Проведение технических осмотров и устранение незначительных неисправностей в системах канализации, ХВС, ГВС и отопления</td>
                    <td class="services__table-item">1 раз в год</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">15.</td>
                    <td class="services__table-item">Осмотр противопожарной системы</td>
                    <td class="services__table-item">1 раз в год</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">16.</td>
                    <td class="services__table-item">Аварийное обслуживание</td>
                    <td class="services__table-item">Постоянно на системах водоснабжения, теплоснабжения, газоснабжения, канализации, энергоснабжения</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">17.</td>
                    <td class="services__table-item">Дератизация, дезинсекция</td>
                    <td class="services__table-item">По мере необходимости</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">18.</td>
                    <td class="services__table-item">Текущий ремонт, по результатам технического осмотра дома и подготовке его к сезонной эксплуатации</td>
                    <td class="services__table-item">По мере необходимости</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">19.</td>
                    <td class="services__table-item">Ремонт малых форм, завоз песка в песочницы,  озеленения</td>
                    <td class="services__table-item">По мере необходимости</td>
                </tr>
                <tr class="services__table-rows">
                    <td class="services__table-item">20.</td>
                    <td class="services__table-item">Очистка кровли от снега</td>
                    <td class="services__table-item">По мере необходимости</td>
                </tr>
                </tbody>
            </table>
        </div>
        <p><strong>Примечание:</strong></p>
        <p>Услуги по управлению, сбору средств с населения, входят в стоимость работ по содержанию и ремонту общего имущества многоквартирного дома.</p>
    </div>
</section>
<?php $this->stop(); ?>