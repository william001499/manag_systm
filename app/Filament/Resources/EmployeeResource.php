<?php

namespace App\Filament\Resources;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Models\Employee;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Employee Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Relationships.')
                
                ->schema([
                    Forms\components\TextInput::make('country')
                     ->required(),
                    Forms\components\TextInput::make('state_id')
                ->required(),
                Forms\components\TextInput::make('city_id')
                ->required(),
                Forms\components\TextInput::make('department_id')
              ->required(),
                ])->Columns(2),
                
                Forms\Components\Section::make('User address')
                ->schema([
                 Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\TextInput::make('zip-code')
                    ->required()
                    ->maxLength(255),
                ])->Columns(2),
                Forms\Components\Section::make('Date')
                ->schema([
                    Forms\Components\TextInput::make('date-of-birth')
                    ->required(),
                    Forms\Components\TextInput::make('date-hired')
                    ->required()
                    
                ])->Columns(2)
               
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
         
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }    
}
