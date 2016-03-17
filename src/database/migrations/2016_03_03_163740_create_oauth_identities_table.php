<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateOauthIdentitiesTable.
 */
class CreateOauthIdentitiesTable extends Migration
{
    /**
     * The authentication service providers table name.
     *
     * @var string
     */
    protected $authenticationProvidersTable;

    /**
     * The users table name.
     *
     * @var string
     */
    protected $usersTable;

    /**
     * CreateOauthIdentitiesTable constructor.
     */
    public function __construct()
    {
        $this->authenticationProvidersTable = Config::get('acacha-socialite.table');
        $model = Config::get('acacha-socialite.model');
        $this->usersTable = with(new $model)->getTable();
    }

    /**
     * Migration up.
     */
    public function up()
    {
        Schema::create($this->authenticationProvidersTable, function (Blueprint $table) {
            $table->increments('id');
            $table->string('provider_user_id');
            $table->string('username');
            $table->string('user_avatar');
            $table->string('access_token');
            $table->timestamps();
        });

        Schema::create($this->getPivotTableName(), function (Blueprint $table) {
            $table->integer(str_singular($this->authenticationProvidersTable).'_id')->unsigned()->index();
            $table->foreign(str_singular($this->authenticationProvidersTable).'_id')->references('id')
                ->on($this->authenticationProvidersTable)->onDelete('cascade');
            $table->integer(str_singular($this->usersTable).'_id')->unsigned()->index();
            $table->foreign(str_singular($this->usersTable).'_id')->references('id')->on($this->usersTable)
                ->onDelete('cascade');
        });
    }

    /**
     * Migration down.
     */
    public function down()
    {
        Schema::drop($this->authenticationProvidersTable);
        Schema::drop($this->getPivotTableName());
    }

    /**
     * Get the name of the pivot table.
     *
     * @return string
     */
    protected function getPivotTableName()
    {
        return implode('_', array_map('str_singular', $this->getSortedTableNames()));
    }

    /**
     * Sort the two tables in alphabetical order.
     *
     * @return array
     */
    protected function getSortedTableNames()
    {
        $tables = [
            strtolower($this->authenticationProvidersTable),
            strtolower($this->usersTable),
        ];
        sort($tables);

        return $tables;
    }
}
