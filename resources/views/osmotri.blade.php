@extends('layouts.app')
@section('title', 'Данные')
@section('content')

<div class="container"> 
    <table class="table table-bordered table-striped" style="width:90%;">
        <tr><td><p>Жалобы</p></td><td>боли в поясничной области, иррадиирующие вниз живота, тошнота</td></tr>
        <tr><td><p>Anamnesis morbi</p></td><td>Тут что-то</td></tr>
        <tr><td><p>Anamnesis vitae</p></td><td>Тут что-то</td></tr>
        <tr><td><p>Аллергоанамнез</p></td><td>Тут что-то</td></tr>
        <tr><td><p>Трудовой анамнез, место работы</p></td><td>>работающий трудоспособного возраста, в л/н  нуждается.</td></tr>    
        <tr><td><p>Трансфузиологический анамнез</p></td><td>Тут что-то</td></tr>
        <tr><td><p>Объективно при поступлении</p></td><td> <textarea style="width:100%;height:180px;">Состояние  удовлетворительное. Температура 36,9 С. Кожные покровы обычной окраски. Л/у доступные пальпации не увеличены. Дыхание в легких везикулярное. ЧД 16 в мин. Тоны сердца приглушены, ритмичные. АД 140/80, ЧСС 78 в мин. Живот не вздут, симметричный, мягкий, участвует в акте дыхания, чувствительный над лоном. Перистальтика выслушивается. С-м Щеткина-Блюмберга отр. Печень по краю реберной дуги. Стул в норме. Поясничная область не изменена. Почки не пальпируются. Пальпация их безболезненная. С-м "поколачивания" отриц   Мочевой пузырь пальпаторно и перкуторно не определяется. Мочится  самостоятельно.  Уретрита нет.  </textarea> </td></tr>
        <tr><td><p>Per rectum</p></td><td><input type="input"required></td></tr>
        <tr><td><p>Данные ПГИ</p></td><td><input type="input" required></td></tr>
        <tr><td><p>Данные амбулаторного обследования</p></td><td> <textarea style="width:100%;height:80px;">ФЛГ (амб): без свежих инфильтративных изменений.
Терапевт (амб): противопоказаний для оперативного лечения нет. </textarea> </td></tr>
    </table>   
</div>

@endsection