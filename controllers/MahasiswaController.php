<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $data_mahasiswa = $query->orderBy('id')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();
        return $this->render('index',[
            'data_mahasiswa' => $data_mahasiswa,
            'pagination' => $pagination,
        ]);
    }
    public function actionCreate()
    {
        $model = new Mahasiswa();

        if($model->load(yii::$app->request->post()) && $model->save())
        {
            //jika submit dan save berhasil akan tampil pesan..
            yii::$app->session->setFlash('success','Data berhasil disimpan');
            return $this->refresh();
        }

        return $this->render('create',[
            'model'=>$model,
        ]);
    }
    public function actionUpdate($id)
    {
        $model = Mahasiswa::findOne($id);

        if($model->load(yii::$app->request->post()) && $model->save())
        {
            //jika submit dan save berhasil akan tampil pesan..
            yii::$app->session->setFlash('success','Data berhasil diubah');
            return $this->refresh();
        }

        return $this->render('update',[
            'model'=>$model,
        ]);
    }
    public function actionDelete($id)
    {
        $model=Mahasiswa::findOne($id);
        $model->delete();
        return $this->redirect(['index']);
    }
}