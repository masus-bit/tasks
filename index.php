<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>aloha</title>
    <link rel="stylesheet" href="./style.css" />
  </head>

  <body>
    <div class="container">
      <header class="jms-head">
        <p class="jms">Junior | Middle | Senior</p>
      </header>
      <main class="main">

        <h1 class="title">Тестовое задание для Junior веб-разработчика</h1>
        <p class="text">
          Перед началом выполнения тестового задания, пожалуйста, убедитесь, что
          данная вакансия открыта. <br />
          Ознакомиться со списком актуальных вакансий можно по ссылке:
          https://voronezh.hh.ru/employer/1132736
        </p>
        <div class="text-block text">
          <p class="left-text text">
            Компания IT-Buro специализируется на создании и развитии современных
            интернет-проектов, сервисов и решений на платформе "1С-Битрикс". Мы
            прекрасно осознаем преимущества и недостатки платформы, но высокое
            качество наших услуг и соответствующий высокий спрос, позволяет нам
            более 10 лет прекрасно себя чувствовать на рынке IT-услуг, работая
            только на 1С-Битрикс.
          </p>
          <p class="right-text text">
            У нас дружная команда и прекрасный офис в стиле лофт в одном из
            самых красивых зданий Воронежа. Для всех сотрудников созданы
            комфортные условия труда: работаем исключительно на технике Apple,
            ведущие программисты имеют в своем распоряжении iMac Retina и
            AirPods, а освещением и кондиционером в офисе управляет Яндекс.Алиса
            =)
          </p>
        </div>
        <div class="attention">
          <img src="./BX-logo.png" alt="" class="attention-img" />
          <p class="attention-text text">
            Внимание: в данном задании нет коммерческой составляющей, оно
            рассчитано исключительно на проверку Ваших базовых знаний
            (HTML+CSS). На практике заниматься версткой Вам не придется, но для
            успешного развития в должности backend-разработчика, frontend надо
            знать на базовом уровне и понимать как он устроен.
          </p>
        </div>


      </main>
      <footer class="footer">
          ©2009-2019 IT-Buro
      </footer>
    </div>
    <script src="./script.js"></script>
    <?php include_once './ArrayWorker.php';
$obj = new ArrayWorker();
$obj->dump();
?>
  </body>
</html>
