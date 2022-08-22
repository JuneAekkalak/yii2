<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PersonalInfo */

$this->title = $model->firstname." ".$model->lastname;
$this->params['breadcrumbs'][] = ['label' => 'Personal Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<style>
   
</style>

<div class="personal-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="d-flex justify-content-end align-items-center px-3 mb-0 pb-0">
        <?= Html::a('Update', ['update', '_id' => (string) $model->_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', '_id' => (string) $model->_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <section style="background-color: white;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="<?= $model->image_url?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?= $model->firstname." ".$model->lastname?></h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4"></p>
            <!-- <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div> -->
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">Email : <?= $model->e_mail?></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">Phone : <?= $model->phone?></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">Facebook : <?= $model->facebook?></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">Line : <?= $model->line?></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">Instagram : <?= $model->instragram?></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
          <p class="mb-4"><span class="text-primary font-italic me-1">Personal Information</span> </p>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $model->firstname." ".$model->lastname?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nick Name</p>
              </div>
              <div class="col-sm-3">
                <p class="text-muted mb-0"><?= $model->nickname?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Age</p>
              </div>
              <div class="col-sm-3">
                <p class="text-muted mb-0"><?= $model->age?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of birth</p>
              </div>
              <div class="col-sm-3">
                <p class="text-muted mb-0"><?= $model->dob?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-3">
                <p class="text-muted mb-0"><?= $model->gender?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
          <p class="mb-4"><span class="text-primary font-italic me-1">Education Level</span> </p>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">High School</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $model->high_school_name?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Graduation</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $model->graduation?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">University</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $model->cllege_name?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Major</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $model->majors?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Faculty</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $model->school_of?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
          <p class="mb-4"><span class="text-primary font-italic me-1">Interest&Aptitude</span> </p>
            <div class="row">
            <div class="col-sm-4">
                <p class="mb-0">Color</p>
              </div>
              <div class="col-sm-8">
                <p class="text-muted mb-0"><?= $model->color?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0">Food</p>
              </div>
              <div class="col-sm-8">
                <p class="text-muted mb-0"><?= $model->food?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0">Sport</p>
              </div>
              <div class="col-sm-8">
                <p class="text-muted mb-0"><?= $model->sport?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0">Programing Language</p>
              </div>
              <div class="col-sm-8">
                <p class="text-muted mb-0"><?= $model->com_langs?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0">Database</p>
              </div>
              <div class="col-sm-8">
                <p class="text-muted mb-0"><?= $model->database?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0">Course</p>
              </div>
              <div class="col-sm-8">
                <p class="text-muted mb-0"><?= $model->course?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0">Language</p>
              </div>
              <div class="col-sm-8">
                <p class="text-muted mb-0"><?= $model->langs?></p>
              </div>
            </div>
            <!-- <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">School of</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $model->school_of?></p>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
