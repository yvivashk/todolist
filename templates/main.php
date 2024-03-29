<section class="content__side">
    <h2 class="content__side-heading">Проекты</h2>

    <nav class="main-navigation">
        <ul class="main-navigation__list">
            <?php foreach ($my_work as $work): ?>
                <li class="main-navigation__list-item">
                    <a class="main-navigation__list-item-link" href="#"><?= strip_tags($work); ?></a>
                    <span class="main-navigation__list-item-count"><?= counter_task($task_list, $work); ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <a class="button button--transparent button--plus content__side-button"
       href="../pages/form-project.html" target="project_add">Добавить проект</a>
</section>

<main class="content__main">
    <h2 class="content__main-heading">Список задач</h2>

    <form class="search-form" action="../index.php" method="post" autocomplete="off">
        <input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">

        <input class="search-form__submit" type="submit" name="" value="Искать">
    </form>

    <div class="tasks-controls">
        <nav class="tasks-switch">
            <a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
            <a href="/" class="tasks-switch__item">Повестка дня</a>
            <a href="/" class="tasks-switch__item">Завтра</a>
            <a href="/" class="tasks-switch__item">Просроченные</a>
        </nav>

        <label class="checkbox">
            <!--добавить сюда атрибут "checked", если переменная $show_complete_tasks равна единице-->
            <?php if ($show_complete_tasks === 1): ?>
                <input class="checkbox__input visually-hidden show_completed" type="checkbox" <?= 'checked'; ?>>
            <?php endif; ?>
            <span class="checkbox__text">Показывать выполненные</span>
        </label>
    </div>

    <table class="tasks">
        <?php foreach ($task_list as $key => $value): ?>
            <?php if ($value['status'] && $show_complete_tasks == 0) {
                continue;
            } ?>
            <tr class="tasks__item task <?php if ($value['status']): ?> task--completed<?php endif; ?><?php if (get_time_left($value['date_completion']) <= 24): ?>task--important<?php endif; ?>">
                <td class="task__select">
                    <label class="checkbox task__checkbox">
                        <span class="checkbox__text"><?= strip_tags($value['task']); ?></span>
                    </label>
                </td>
                <td class="task__date"><?= strip_tags($value['date_completion']); ?></td>

                <td class="task__controls">
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>