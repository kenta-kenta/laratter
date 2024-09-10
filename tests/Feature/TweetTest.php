<?php
use App\Models\Tweet;
use App\Models\User;

it('displays tweets', function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $tweet = Tweet::factory()->create();
    $response = $this->get('/tweets');

    $response->assertStatus(200);
    $response->assertSee($tweet->tweet);
    $response->assertSee($tweet->user->name);
});

it('displays the create tweet page', function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $response = $this->get('/tweets/create');
    $response->assertStatus(200);
});

it('allows authenticated users to create a tweet', function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $tweetData = ['tweet' => 'This is a test tweet.'];
    $response = $this->post('/tweets', $tweetData);
    $this->assertDatabaseHas('tweets', $tweetData);

    // レスポンスの確認
    $response->assertStatus(302);
    $response->assertRedirect('/tweets');
});

it('displays a tweet', function () {
    // ユーザを作成
    $user = User::factory()->create();
  
    // ユーザを認証
    $this->actingAs($user);
  
    // Tweetを作成
    $tweet = Tweet::factory()->create();
  
    // GETリクエスト
    $response = $this->get("/tweets/{$tweet->id}");
  
    // レスポンスにTweetの内容が含まれていることを確認
    $response->assertStatus(200);
    $response->assertSee($tweet->tweet);
    $response->assertSee($tweet->created_at->format('Y-m-d H:i'));
    $response->assertSee($tweet->updated_at->format('Y-m-d H:i'));
    $response->assertSee($tweet->tweet);
    $response->assertSee($tweet->user->name);
});

it('displays the edit tweet page', function () {
    // テスト用のユーザーを作成
    $user = User::factory()->create();
  
    // ユーザーを認証（ログイン）
    $this->actingAs($user);
  
    // Tweetを作成
    $tweet = Tweet::factory()->create(['user_id' => $user->id]);
  
    // 編集画面にアクセス
    $response = $this->get("/tweets/{$tweet->id}/edit");
  
    // ステータスコードが200であることを確認
    $response->assertStatus(200);
  
    // ビューにTweetの内容が含まれていることを確認
    $response->assertSee($tweet->tweet);
});

it('allows a user to update their tweet', function () {
    // ユーザを作成
    $user = User::factory()->create();
  
    // ユーザを認証
    $this->actingAs($user);
  
    // Tweetを作成
    $tweet = Tweet::factory()->create(['user_id' => $user->id]);
  
    // 更新データ
    $updatedData = ['tweet' => 'Updated tweet content.'];
  
    // PUTリクエスト
    $response = $this->put("/tweets/{$tweet->id}", $updatedData);
  
    // データベースが更新されたことを確認
    $this->assertDatabaseHas('tweets', $updatedData);
  
    // レスポンスの確認
    $response->assertStatus(302);
    $response->assertRedirect("/tweets/{$tweet->id}");
});

it('allows a user to delete their tweet', function () {
    // ユーザを作成
    $user = User::factory()->create();
  
    // ユーザを認証
    $this->actingAs($user);
  
    // Tweetを作成
    $tweet = Tweet::factory()->create(['user_id' => $user->id]);
  
    // DELETEリクエスト
    $response = $this->delete("/tweets/{$tweet->id}");
  
    // データベースから削除されたことを確認
    $this->assertDatabaseMissing('tweets', ['id' => $tweet->id]);
  
    // レスポンスの確認
    $response->assertStatus(302);
    $response->assertRedirect('/tweets');
});