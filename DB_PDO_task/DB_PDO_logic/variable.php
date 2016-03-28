<?php  $pdoObj = new PDO('mysql:host=127.0.0.1;dbname=schedule;charset=utf8','root');
// 日曜日
// for ($i=1; $i <= 7; $i++) {
//   $echoSubDateSql = 'echoSubDate' . $i . 'Sql';
//   $$echoSubDateSql = 'select sub_date_' . $i . 'from week_schedule where id=:id';
//   $echoSubDate_1query = 'echoSubDate' . $i . '_1Query';
//   $$echoSubDate_1query = $pdoObj -> prepare($$echoSubDateSql);
//   $$echoSubDate_1query -> bindValue(':id', 1);
//   $$echoSubDate_1query -> execute();
//   $subDate_1 = 'subDate' . $i . '_1';
//   $$subDate_1 = $$echoSubDate_1query -> fetchall(PDO::FETCH_ASSOC);
//   $echoSubDate_2query = 'echoSubDate' . $i . '_2Query';
//   $$echoSubDate_2query = $pdoObj -> prepare($$echoSubDateSql);
//   $$echoSubDate_2query -> bindValue(':id', 2);
//   $$echoSubDate_2query -> execute();
//   $subDate_2 = 'subDate' . $i . '_2';
//   $$subDate_2 = $$echoSubDate_2query -> fetchall(PDO::FETCH_ASSOC);

//   // 日曜日-先生
//   $echoTDateSql = 'echoTDate' . $i . 'Sql';
//   $$echoTDateSql = 'select t_date_' $i 'from week_teacher where id=:id';
//   $echoTdate_1Query = 'echoTdate' . $i . '_1Query';
//   $$echoTdate_1Query = $pdoObj -> prepare($$echoSubDateSql);
//   $$echoTdate_1Query -> bindValue(':id', 1);
//   $$echoTdate_1Query -> execute();
//   $tdate_1 = 'Tdate' . $i . '_1';
//   $$tdate_1 = $$echoTdate_1Query -> fetchall(PDO::FETCH_ASSOC);
//   $echoTdate_2Query = 'echoTdate' . $i . '_2Query';
//   $$echoTdate_2Query = $pdoObj -> prepare($$echoSubDateSql);
//   $$echoTdate_2Query -> bindValue(':id', 2);
//   $$echoTdate_2Query -> execute();
//   $tdate_2 = 'Tdate' . $i . '_2';
//   $$tdate_2 = $$echoTdate_2Query -> fetchall(PDO::FETCH_ASSOC);
// }

  // 日曜日
  $echoSunSubSql = 'select sub_date_1 from week_schedule where id=:id';
  $echoSunSub1Query = $pdoObj -> prepare($echoSunSubSql);
  $echoSunSub1Query -> bindValue(':id', 1);
  $echoSunSub1Query -> execute();
  $sunSub1 = $echoSunSub1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoSunSub2Query = $pdoObj -> prepare($echoSunSubSql);
  $echoSunSub2Query -> bindValue(':id', 2);
  $echoSunSub2Query -> execute();
  $sunSub2 = $echoSunSub2Query -> fetchall(PDO::FETCH_ASSOC);
  // 月曜日
  $echoMonSubSql = 'select sub_date_2 from week_schedule where id=:id';
  $echoMonSub1Query = $pdoObj -> prepare($echoMonSubSql);
  $echoMonSub1Query -> bindValue(':id', 1);
  $echoMonSub1Query -> execute();
  $monSub1 = $echoMonSub1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoMonSub2Query = $pdoObj -> prepare($echoMonSubSql);
  $echoMonSub2Query -> bindValue(':id', 2);
  $echoMonSub2Query -> execute();
  $monSub2 = $echoMonSub2Query -> fetchall(PDO::FETCH_ASSOC);
  // 火曜日
  $echoTueSubSql = 'select sub_date_3 from week_schedule where id=:id';
  $echoTueSub1Query = $pdoObj -> prepare($echoTueSubSql);
  $echoTueSub1Query -> bindValue(':id', 1);
  $echoTueSub1Query -> execute();
  $tueSub1 = $echoTueSub1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoTueSub2Query = $pdoObj -> prepare($echoTueSubSql);
  $echoTueSub2Query -> bindValue(':id', 2);
  $echoTueSub2Query -> execute();
  $tueSub2 = $echoTueSub2Query -> fetchall(PDO::FETCH_ASSOC);
  // 水曜日
  $echoWedSubSql = 'select sub_date_4 from week_schedule where id=:id';
  $echoWedSub1Query = $pdoObj -> prepare($echoWedSubSql);
  $echoWedSub1Query -> bindValue(':id', 1);
  $echoWedSub1Query -> execute();
  $wedSub1 = $echoWedSub1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoWedSub2Query = $pdoObj -> prepare($echoWedSubSql);
  $echoWedSub2Query -> bindValue(':id', 2);
  $echoWedSub2Query -> execute();
  $wedSub2 = $echoWedSub2Query -> fetchall(PDO::FETCH_ASSOC);
  // 木曜日
  $echoThuSubSql = 'select sub_date_5 from week_schedule where id=:id';
  $echoThuSub1Query = $pdoObj -> prepare($echoThuSubSql);
  $echoThuSub1Query -> bindValue(':id', 1);
  $echoThuSub1Query -> execute();
  $thuSub1 = $echoThuSub1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoThuSub2Query = $pdoObj -> prepare($echoThuSubSql);
  $echoThuSub2Query -> bindValue(':id', 2);
  $echoThuSub2Query -> execute();
  $thuSub2 = $echoThuSub2Query -> fetchall(PDO::FETCH_ASSOC);
  // 金曜日
  $echoFriSubSql = 'select sub_date_6 from week_schedule where id=:id';
  $echoFriSub1Query = $pdoObj -> prepare($echoFriSubSql);
  $echoFriSub1Query -> bindValue(':id', 1);
  $echoFriSub1Query -> execute();
  $friSub1 = $echoFriSub1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoFriSub2Query = $pdoObj -> prepare($echoFriSubSql);
  $echoFriSub2Query -> bindValue(':id', 2);
  $echoFriSub2Query -> execute();
  $friSub2 = $echoFriSub2Query -> fetchall(PDO::FETCH_ASSOC);
  // 土曜日
  $echoSatSubSql = 'select sub_date_7 from week_schedule where id=:id';
  $echoSatSub1Query = $pdoObj -> prepare($echoSatSubSql);
  $echoSatSub1Query -> bindValue(':id', 1);
  $echoSatSub1Query -> execute();
  $satSub1 = $echoSatSub1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoSatSub2Query = $pdoObj -> prepare($echoSatSubSql);
  $echoSatSub2Query -> bindValue(':id', 2);
  $echoSatSub2Query -> execute();
  $satSub2 = $echoSatSub2Query -> fetchall(PDO::FETCH_ASSOC);
  // 日曜日-先生
  $echoSunTSql = 'select t_date_1 from week_teacher where id=:id';
  $echoSunT1Query = $pdoObj -> prepare($echoSunTSql);
  $echoSunT1Query -> bindValue(':id', 1);
  $echoSunT1Query -> execute();
  $sunT1 = $echoSunT1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoSunT2Query = $pdoObj -> prepare($echoSunTSql);
  $echoSunT2Query -> bindValue(':id', 2);
  $echoSunT2Query -> execute();
  $sunT2 = $echoSunT2Query -> fetchall(PDO::FETCH_ASSOC);
  // 月曜日
  $echoMonTSql = 'select t_date_2 from week_teacher where id=:id';
  $echoMonT1Query = $pdoObj -> prepare($echoMonTSql);
  $echoMonT1Query -> bindValue(':id', 1);
  $echoMonT1Query -> execute();
  $monT1 = $echoMonT1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoMonT2Query = $pdoObj -> prepare($echoMonTSql);
  $echoMonT2Query -> bindValue(':id', 2);
  $echoMonT2Query -> execute();
  $monT2 = $echoMonT2Query -> fetchall(PDO::FETCH_ASSOC);
  // 火曜日
  $echoTueTSql = 'select t_date_3 from week_teacher where id=:id';
  $echoTueT1Query = $pdoObj -> prepare($echoTueTSql);
  $echoTueT1Query -> bindValue(':id', 1);
  $echoTueT1Query -> execute();
  $tueT1 = $echoTueT1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoTueT2Query = $pdoObj -> prepare($echoTueTSql);
  $echoTueT2Query -> bindValue(':id', 2);
  $echoTueT2Query -> execute();
  $tueT2 = $echoTueT2Query -> fetchall(PDO::FETCH_ASSOC);
  // 水曜日
  $echoWedTSql = 'select t_date_4 from week_teacher where id=:id';
  $echoWedT1Query = $pdoObj -> prepare($echoWedTSql);
  $echoWedT1Query -> bindValue(':id', 1);
  $echoWedT1Query -> execute();
  $wedT1 = $echoWedT1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoWedT2Query = $pdoObj -> prepare($echoWedTSql);
  $echoWedT2Query -> bindValue(':id', 2);
  $echoWedT2Query -> execute();
  $wedT2 = $echoWedT2Query -> fetchall(PDO::FETCH_ASSOC);
  // 木曜日
  $echoThuTSql = 'select t_date_5 from week_teacher where id=:id';
  $echoThuT1Query = $pdoObj -> prepare($echoThuTSql);
  $echoThuT1Query -> bindValue(':id', 1);
  $echoThuT1Query -> execute();
  $thuT1 = $echoThuT1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoThuT2Query = $pdoObj -> prepare($echoThuTSql);
  $echoThuT2Query -> bindValue(':id', 2);
  $echoThuT2Query -> execute();
  $thuT2 = $echoThuT2Query -> fetchall(PDO::FETCH_ASSOC);
  // 金曜日
  $echoFriTSql = 'select t_date_6 from week_teacher where id=:id';
  $echoFriT1Query = $pdoObj -> prepare($echoFriTSql);
  $echoFriT1Query -> bindValue(':id', 1);
  $echoFriT1Query -> execute();
  $friT1 = $echoFriT1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoFriT2Query = $pdoObj -> prepare($echoFriTSql);
  $echoFriT2Query -> bindValue(':id', 2);
  $echoFriT2Query -> execute();
  $friT2 = $echoFriT2Query -> fetchall(PDO::FETCH_ASSOC);
  // 土曜日
  $echoSatTSql = 'select t_date_7 from week_teacher where id=:id';
  $echoSatT1Query = $pdoObj -> prepare($echoSatTSql);
  $echoSatT1Query -> bindValue(':id', 1);
  $echoSatT1Query -> execute();
  $satT1 = $echoSatT1Query -> fetchall(PDO::FETCH_ASSOC);
  $echoSatT2Query = $pdoObj -> prepare($echoSatTSql);
  $echoSatT2Query -> bindValue(':id', 2);
  $echoSatT2Query -> execute();
  $satT2 = $echoSatT2Query -> fetchall(PDO::FETCH_ASSOC);
 ?>